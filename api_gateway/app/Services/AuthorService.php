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
     *  @return \Illuminate\Http\Response
     */
    public function indexAuthors(): \Illuminate\Http\Response
    {
        return $this->httpService->performRequest($this->baseUri, "GET", "authors");
    }

    /**
     *  Create an author
     * 
     *  @param array $request 
     * 
     *  @return \Illuminate\Http\Response
     */
    public function storeAuthor(array $request): \Illuminate\Http\Response
    {
        return $this->httpService->performRequest($this->baseUri, "POST", "authors", $request);
    }

    /**
     *  Show an existing author
     * 
     *  @param string $author 
     * 
     *  @return \Illuminate\Http\Response
     */
    public function showAuthor(string $author): \Illuminate\Http\Response
    {
        return $this->httpService->performRequest($this->baseUri, "GET", "authors/{$author}");
    }

    /**
     *  Update an existing author
     * 
     *  @param array $request
     *  @param string $author 
     * 
     *  @return \Illuminate\Http\Response
     */
    public function updateAuthor(array $request, string $author): \Illuminate\Http\Response
    {
        return $this->httpService->performRequest($this->baseUri, "PUT", "authors/{$author}", $request);
    }

    /**
     *  Delete an existing author
     * 
     *  @param string $author 
     * 
     *  @return \Illuminate\Http\Response
     */
    public function destroyAuthor(string $author): \Illuminate\Http\Response
    {
        return $this->httpService->performRequest($this->baseUri, "DELETE", "authors/{$author}");
    }
}
