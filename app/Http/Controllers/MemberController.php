<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;
use App\Models\member;
use Carbon\Carbon;
use Termwind\Components\Dd;

class MemberController extends Controller
{
    public function index()
    {
        $member = member::all();
        
        $waktuSaatIni = Carbon::now();
        $formattedTime = $waktuSaatIni->isoFormat('MMM D, YYYY | ddd, h:mm A');
        return view('MemberList',['memberlist' => $member, 'formattedTime' => $formattedTime,]);
    }

    public function AddDataMember()
    {
        $major = Major::all();
        $waktuSaatIni = Carbon::now();
        $formattedTime = $waktuSaatIni->isoFormat('MMM D, YYYY | ddd, h:mm A');
        return view('addMember', ['majors' => $major, 'formattedTime' => $formattedTime,]);
    }

    public function store(Request $request)
    {
        $member = new member;
        // $member->name = $request->name;
        // $member->email = $request->email;
        // $member->phonenumber = $request->phonenumber;
        // $member->address = $request->address;
        // $member->department = $request->department;
        // $member->save();
        $member->create($request->all());
        return redirect('/MemberList');
    }

    public function edit(Request $request, $id){
        $member = member::findOrFail($id);
        $major = Major::where('major', '!=', $member->major)->get('major');
        return view('editMember', [ 'members' => $member, 'majors' => $major]);
    }


    public function update(Request $request, $id){
        $member = member::findOrFail($id);
        $member->update($request->all());
        return redirect('/MemberList');
    }
}
