<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
use App\Models\book;
use App\Models\loan;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(){
        $books =  book::take(5)->get();
        $member = member::take(5)->get();
        $favbook = book::all();

        $totalBook = book::count();
        $totalborrow = loan::where('status', 'Borrowed')->count();
        $totaldelay = loan::where('status',  'Delay')->count();
        $bookborrow = loan::where('status', 'Borrowed')->take(5)->get();
        $bookdelay = loan::where('status',  'Delay')->take(5)->get();
        $totalMember = Member::count();

        $waktuSaatIni = Carbon::now();
        $formattedTime = $waktuSaatIni->isoFormat('MMM D, YYYY | ddd, h:mm A');

        return view('Dashboard', [
            'booklist' => $books,
            'formattedTime' => $formattedTime,
            'memberlist' => $member,
            'favbook' => $favbook,
            'tborrow' => $totalborrow,
            'tdelay' => $totaldelay,
            'tbook' => $totalBook,
            'tmember' => $totalMember,
            'bookborrow' => $bookborrow,
            'bookdelay' => $bookdelay
        ]); 
    }
}
