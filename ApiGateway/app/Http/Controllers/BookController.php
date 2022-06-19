<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\BookService;

class BookController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the books microservice
     * @var BookService
     */
    public $bookService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    /**
     * Return the list of books
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Create one new book
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Obtain and show one book
     * @return \Illuminate\Http\Response
     */
    public function show($book)
    {

    }

    /**
     * Update a existing book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $book)
    {

    }

    /**
     * Delete a existing book
     * @return \Illuminate\Http\Response
     */
    public function destroy($book)
    {

    }

}
