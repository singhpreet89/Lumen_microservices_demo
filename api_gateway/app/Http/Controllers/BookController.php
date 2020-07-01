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
     *  Get all existing books
     * 
     *  @return array
     */
    public function index()
    {
        return $this->bookService->indexBooks();
    }

    /**
     *  Create a book
     * 
     *  @param Illuminate\Http\Request $request
     * 
     *  @return array
     */
    public function store(Request $request)
    {
        return $this->bookService->storeBook($request->all());
    }

    /**
     *  Show an existing book
     * 
     *  @param string $book
     * 
     *  @return array
     */
    public function show(string $book)
    {
        return $this->bookService->showBook($book);
    }

    /**
     *  Update an existing book
     * 
     *  @param Illuminate\Http\Request $request
     *  @param string $book
     * 
     *  @return array
     */
    public function update(Request $request, string $book)
    {
        return $this->bookService->updateBook($request->all(), $book);    
    }

    /**
     *  Delete an existing book
     * 
     *  @param string $book
     * 
     *  @return array
     */
    public function destroy(string $book)
    {
        return $this->bookService->destroyBook($book);
    }
}
