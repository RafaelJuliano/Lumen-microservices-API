<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // TODO
    }

    /**
     * Return the list of books
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return $this->successResponse($books);
    }

    /**
     * Create one new book
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            // TODO
        ];

        $this->validate($request, $rules);

        $book = Book::create($request->all());

         return $this->successResponse($book, Response::HTTP_CREATED);

    }

    /**
     * Obtain and show one book
     * @return \Illuminate\Http\Response
     */
    public function show($book)
    {
        $book = Book::findOrFail($book);
        return $this->successResponse($book);
    }

    /**
     * Update a existing book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $book)
    {
        $rules = [
            // TODO
        ];

        $this->validate($request, $rules);

        $book = Book::findOrFail($book);

        $book->fill($request->all());

        if($book->isClean()) {
            return $this->errorResponse('At least one value must be different from the current one', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $book->save();

        return $this->successResponse($book);

    }

    /**
     * Delete a existing book
     * @return \Illuminate\Http\Response
     */
    public function destroy($book)
    {
        $book = Book::findOrFail($book);
        $book->delete();
        return $this->successResponse($book);
    }

}
