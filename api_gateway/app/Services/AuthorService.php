<?php

namespace App\Services;

class AuthorService
{
    /**
     *  Base uri to be consumed in the Author Service
     * 
     *  @var string
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
        $this->baseUri = config('services.authors.base_uri');
        $this->httpService = $httpService;
    }

    /**
     *  Get all authors
     * 
     *  @return array
     */
    public function indexAuthors()
    {
        return $this->httpService->performRequest($this->baseUri, "GET", "/authors");
    }

    /**
     *  Create an author
     * 
     *  @param array $request 
     * 
     *  @return array
     */
    public function storeAuthor(array $request)
    {
        return $this->httpService->performRequest($this->baseUri, "POST", "/authors", $request);
    }

    /**
     *  Show an existing author
     * 
     *  @param string $author 
     * 
     *  @return array
     */
    public function showAuthor(string $author)
    {
        return $this->httpService->performRequest($this->baseUri, "GET", "/authors/{$author}");
    }

    /**
     *  Update an existing author
     * 
     *  @param array $request
     *  @param string $author 
     * 
     *  @return array
     */
    public function updateAuthor(array $request, string $author)
    {
        return $this->httpService->performRequest($this->baseUri, "PUT", "/authors/{$author}", $request);
    }

    /**
     *  Delete an existing author
     * 
     *  @param string $author 
     * 
     *  @return array
     */
    public function destroyAuthor(string $author)
    {
        return $this->httpService->performRequest($this->baseUri, "DELETE", "/authors/{$author}");
    }
}
