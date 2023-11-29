<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class MemberController extends Controller
{
    public function index()
    {
        $member = member::all();
        return view('MemberList',['memberlist' => $member]);
    }
}
