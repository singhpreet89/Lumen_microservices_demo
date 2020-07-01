<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BookService;

class BookController extends Controller
{
    /**
     *  Service Object to consume the books_api microservice
     * 
     *  @var BookService $bookService
     */
    public BookService $BookService;


    /**
     *  Create a new controller instance.
     *
     *  @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    /**
     *  Return the list of books
     * 
     *  @return 
     */
    public function index()
    {
        
    }

    /**
     *  Create a book
     * 
     *  @param Illuminate\Http\Request $request
     * 
     *  @return 
     */
    public function store(Request $request)
    {
       
    }

    /**
     *  Show an existing book
     * 
     *  @param string $book
     * 
     *  @return
     */
    public function show(string $book)
    {
    
    }

    /**
     *  Update an existing book
     * 
     *  @param Illuminate\Http\Request $request
     *  @param string $book
     * 
     *  @return 
     */
    public function update(Request $request, string $book)
    {
    
    }

    /**
     *  Delete an existing books
     * 
     *  @param string $book
     * 
     * 
     */
    public function destroy(string $book)
    {
       
    }
}
