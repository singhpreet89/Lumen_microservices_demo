<?php

namespace App\Services;

class BookService
{
    /**
     * Base uri to be consumed in the Book Service
     * 
     * @var string
     */
    public string $baseUri;

    /**
     *  Service Object to use the HttpService
     * 
     *  @var HttpService $httpService
     */
    public HttpService $httpService;

    public function __construct(HttpService $httpService)
    {
        $this->baseUri = config('services.books.base_uri');
        $this->httpService = $httpService;
    }

    /**
     *  Get all books
     * 
     *  @return array
     */
    public function indexBooks()
    {
        return $this->httpService->performRequest($this->baseUri, "GET", "/books");
    }

    /**
     *  Create a book
     * 
     *  @param array $request 
     * 
     *  @return array
     */
    public function storeBook(array $request)
    {
        return $this->httpService->performRequest($this->baseUri, "POST", "/books", $request);
    }

    /**
     *  Show an existing book
     * 
     *  @param string $book 
     * 
     *  @return array
     */
    public function showBook(string $book)
    {
        return $this->httpService->performRequest($this->baseUri, "GET", "/books/{$book}");
    }

    /**
     *  Update an existing book
     * 
     *  @param array $request
     *  @param string $book 
     * 
     *  @return array
     */
    public function updateBook(array $request, string $book)
    {
        return $this->httpService->performRequest($this->baseUri, "PUT", "/books/{$book}", $request);
    }

    /**
     *  Delete an existing book
     * 
     *  @param string $book 
     * 
     *  @return array
     */
    public function destroyBook(string $book)
    {
        return $this->httpService->performRequest($this->baseUri, "DELETE", "/books/{$book}");
    }
}
