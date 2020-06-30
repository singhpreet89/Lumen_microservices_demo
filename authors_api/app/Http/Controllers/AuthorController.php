<?php

namespace App\Http\Controllers;

use App\Author;
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
        //
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
