<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
use App\Models\book;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(){
        $books = Book::all();
        $member = member::all();

        $waktuSaatIni = Carbon::now();
        $formattedTime = $waktuSaatIni->isoFormat('MMM D, YYYY | ddd, h:mm A');

        return view('Dashboard', [
            'booklist' => $books,
            'formattedTime' => $formattedTime,
            'memberlist' => $member
        ]); 
    }
}
