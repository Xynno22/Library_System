<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\category;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $category = category::all();
        return view('BookList',['book' => $books , 'category' => $category]);

        
    }

    public function BookDetail($id){
        $book = Book::findOrFail($id);
        $category = category::all();
        return view('Detail' , ['book' => $book, 'category' => $category]);
    }
    public function AddBook()
    {
        $category = category::all();
        return view('addBook', ['category' => $category]);
    }

    public function store(Request $request)
    {
       
        $book = book::create($request->all());
        if($request->file('image')){
            $file= $request->file('image');
            $filename= $request->title.'-'.$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $book['image']= $filename;
        }
        $book->save();

        if($book){
            Session()->flash('status', 'Task was successful!');
            Session()->flash('message', 'Successfully added Book!');
        }

        return redirect('/BookList');
    }

    public function edit(Request $request, $id){
        $book = book::findOrFail($id);



        $category = category::where('category', '!=', $book->category)->get('category');
        return view('editBook', [ 'book' => $book, 'category' => $category]);
    }


    public function update(Request $request, $id){
        $book = book::findOrFail($id);
        $book->update($request->all());

        if($request->file('image')){
            $file= $request->file('image');
            $filename= $request->title.'-'.$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $book['image']= $filename;
        }
        $book->save();

        if($book){
            Session()->flash('status', 'Task was successful!');
            Session()->flash('message', 'Successfully Update Book!');
        }
        return redirect('/BookList');
    }

    public function delete($id){
        $book = book::findOrFail($id);
        return view('deleteBook', [ 'books' => $book]);
    }

    public function destroy($id){
        $deletebook = book::findOrFail($id);
        $deletebook->delete();

        if($deletebook){
            Session()->flash('status', 'Task was successful!');
            Session()->flash('message', 'Successfully Delete Book!');
        }

        return redirect('/BookList');

    }
}
