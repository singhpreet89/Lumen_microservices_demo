<?php

namespace App\Services;

class BookService
{
    /**
     * Base uri to be consumed in Author Service
     * 
     * @var string
     */
    public string $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.books.base_uri');
    }
}
