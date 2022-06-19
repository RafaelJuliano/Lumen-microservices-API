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

    public function __construct()
    {
        $this->baseUri = config('services.books.base_uri');
    }
}
