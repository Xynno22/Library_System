<?php

namespace App\Http\Controllers;

use App\Models\loan;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\book;
use App\Models\status;
use App\Models\member;

class LoanController extends Controller
{
    public function index()
    {
        $loan = loan::all();
        return view('loans',['loan' => $loan]);
    }

    public function AddDataMember()
    {
        $member = member::all();
        $book = book::all();
        $status = status::all();
       
        return view('addLoan', ['members' => $member, 'book' => $book, 'status' => $status]);
    }

    public function store(Request $request)
    {
        $loan = new loan();
        $loan->create($request->all());
        
        if($loan){
            Session()->flash('status', 'Task was successful!');
            Session()->flash('message', 'Successfully added Loan!');
        }

        return redirect('/loans');
    }

    public function edit(Request $request, $id){
        $member = member::all();
        $book = book::all();
        $loan = loan::all();
        $status = status::where('status', '!=', $loan[0]->status)->get('status');
        return view('editLoan', [ 'loan'=>$loan, 'status' => $status, 'books' => $book, 'member' => $member]);
    }


    public function update(Request $request, $id){
        $loan = loan::findOrFail($id);
        $loan->update($request->all());
        if($loan){
            Session()->flash('status', 'Task was successful!');
            Session()->flash('message', 'Successfully Update Loan!');
        }
        return redirect('/loans');
    }

    public function delete($id){
        $loan = loan::findOrFail($id);
        return view('deleteLoan', [ 'loan' => $loan]);
    }

    public function destroy($id){
        // $deleteMember = DB::table('members')->where('id', $id)->delete(); //QueryBuilder::delete
        $deleteloan = loan::findOrFail($id);
        $deleteloan->delete();

        if($deleteloan){
            Session()->flash('status', 'Task was successful!');
            Session()->flash('message', 'Successfully Delete Loan!');
        }

        return redirect('/loans');

    }
}
