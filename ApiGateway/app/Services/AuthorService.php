<?php

namespace App\Services;

use App\Traits\ConsumeExternalServices;

class AuthorService
{
    use ConsumeExternalServices;

    /**
     * The base URI of the authors service
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
        $this->baseUri = config('services.authors.base_uri');
        $this->secret = config('services.authors.secret');
    }

    /**
     * Return the list of authors
     * @return string
     */
    public function getAuthors()
    {
        return $this->performeRequest('GET', '/authors');
    }


    /**
     * Create one new author
     * @return string
     */
    public function createAuthor($data)
    {
        return $this->performeRequest('POST', '/authors', $data);
    }

    /**
     * Obtain and show one author
     * @return string
     */
    public function getAuthor($author)
    {
        return $this->performeRequest('GET', "/authors/{$author}");
    }

    /**
     * Update a existing author
     * @return string
     */
    public function updateAuthor($data, $author)
    {
        return $this->performeRequest('PUT', "/authors/{$author}", $data);
    }

    /**
     * Delete a existing author
     * @return string
     */
    public function deleteAuthor($author)
    {
        return $this->performeRequest('DELETE', "/authors/{$author}");
    }
}
