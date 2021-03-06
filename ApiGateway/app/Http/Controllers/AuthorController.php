<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\AuthorService;

class AuthorController extends Controller
{
    use ApiResponser;

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
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    /**
     * Return the list of authors
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = $this->authorService->getAuthors();
        return $this->successResponse($authors);
    }

    /**
     * Create one new author
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $author = $this->authorService->createAuthor($request->all());
        return $this->successResponse($author, Response::HTTP_CREATED);
    }

    /**
     * Obtain and show one author
     * @return \Illuminate\Http\Response
     */
    public function show($author)
    {
        $author = $this->authorService->getAuthor($author);
        return $this->successResponse($author);
    }

    /**
     * Update a existing author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $author)
    {
        $author = $this->authorService->updateAuthor($request->all(), $author);
        return $this->successResponse($author);
    }

    /**
     * Delete a existing author
     * @return \Illuminate\Http\Response
     */
    public function destroy($author)
    {
        $author = $this->authorService->deleteAuthor($author);
        return $this->successResponse($author, Response::HTTP_ACCEPTED);
    }

}
