<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthorService;

class AuthorController extends Controller
{
    /**
     *  Service Object to consume the authors_api microservice
     * 
     *  @var AuthorService $authorService
     */
    public AuthorService $authorService;

    /**
     *  Create a new controller instance.
     *
     *  @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    /**
     *  Get all existing authors
     * 
     *  @return array
     */
    public function index()
    {
        return $this->authorService->indexAuthors();
    }

    /**
     *  Create an author
     * 
     *  @param Illuminate\Http\Request $request
     * 
     *  @return array
     */
    public function store(Request $request)
    {
        return $this->authorService->storeAuthor($request->all());
    }

    /**
     *  Show an existing author
     * 
     *  @param string $author
     * 
     *  @return array
     */
    public function show(string $author)
    {
        return $this->authorService->showAuthor($author);
    }

    /**
     *  Update an existing author
     * 
     *  @param Illuminate\Http\Request $request
     *  @param string $author
     * 
     *  @return array
     */
    public function update(Request $request, string $author)
    {
        return $this->authorService->updateAuthor($request->all(), $author);    
    }

    /**
     *  Delete an existing author
     * 
     *  @param string $author
     * 
     *  @return array
     */
    public function destroy(string $author)
    {
        return $this->authorService->destroyAuthor($author);
    }
}
