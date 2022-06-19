<?php

namespace App\Services;

use App\Traits\ConsumeExternalServices;

class BookService
{
    use ConsumeExternalServices;

    /**
     * The base URI of the books service
     * @var string
     */
    public $baseUri;

    /**
     * The secret key to access the authors service
     * @var string
     */
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.books.base_uri');
        $this->secret = config('services.books.secret');
    }

    /**
     * Return the list of books
     * @return string
     */
    public function getBooks()
    {
        return $this->performeRequest('GET', '/books');
    }


    /**
     * Create one new book
     * @return string
     */
    public function createBook($data)
    {
        return $this->performeRequest('POST', '/books', $data);
    }

    /**
     * Obtain and show one book
     * @return string
     */
    public function showBook($book)
    {
        return $this->performeRequest('GET', "/books/{$book}");
    }

    /**
     * Update a existing book
     * @return string
     */
    public function updateBook($data, $book)
    {
        return $this->performeRequest('PUT', "/books/{$book}", $data);
    }

    /**
     * Delete a existing book
     * @return string
     */
    public function deleteBook($book)
    {
        return $this->performeRequest('DELETE', "/books/{$book}");
    }
}
