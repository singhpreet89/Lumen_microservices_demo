<?php

namespace App\Http\Controllers;

use App\Author;
use App\Http\Resources\AuthorCollection;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return the list of authors
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::all();
        return AuthorCollection::collection($authors);
    }

    /**
     * Create an author
     * @return Illuminate\Http\Response
     */
    public function store(Request $request, Author $author)
    {
        // 
    }

    /**
     * Obtain details about a specific author
     * @return Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        // 
    }

    /**
     * Update an existing author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        // 
    }

    /**
     * Delete an existing authors
     * @return Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        // 
    }
}
