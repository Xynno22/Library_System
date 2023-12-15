<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('BookList',['booklist' => $books]);

        
    }

    public function BookDetail($id){
        $book = Book::findOrFail($id);
        return view('Detail' , ['book' => $book]);
    }
   
}
