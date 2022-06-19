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

    public function __construct()
    {
        $this->baseUri = config('services.authors.base_uri');
    }
}
