<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\BookService;
use App\Services\AuthorService;

class BookController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the books microservice
     * @var BookService
     */
    public $bookService;

    /**
     * The service to consume the authors microservice
     * @var AuthorService
     */
    public $authorService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        BookService $bookService,
        AuthorService $authorService
        )
    {
        $this->bookService = $bookService;
        $this->authorService = $authorService;
    }

    /**
     * Return the list of books
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = $this->bookService->getBooks();
        return $this->successResponse($books);
    }

    /**
     * Create one new book
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->authorService->getAuthor($request->author_id);

        $book = $this->bookService->createBook($request->all());
        return $this->successResponse($book, Response::HTTP_CREATED);
    }

    /**
     * Obtain and show one book
     * @return \Illuminate\Http\Response
     */
    public function show($book)
    {
        $book = $this->bookService->showBook($book);
        return $this->successResponse($book);
    }

    /**
     * Update a existing book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $book)
    {
        $this->authorService->getAuthor($request->author_id);

        $book = $this->bookService->updateBook($request->all(), $book);
        return $this->successResponse($book);
    }

    /**
     * Delete a existing book
     * @return \Illuminate\Http\Response
     */
    public function destroy($book)
    {
        $book = $this->bookService->deleteBook($book);
        return $this->successResponse($book, Response::HTTP_ACCEPTED);
    }

}
