<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookController extends Controller
{
    public function indexbook()
    {
        $books = Book::all();
        
        $waktuSaatIni = Carbon::now();
        $formattedTime = $waktuSaatIni->isoFormat('MMM D, YYYY | ddd, h:mm A');

        return view('Dashboard', [
            'booklist' => $books,
            'formattedTime' => $formattedTime
        ]);
    }
   
}
