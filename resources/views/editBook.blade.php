@extends('layout')

@section('container')

        <h3 class="h3-DataMember">Update Book Data</h3>

        <form class="row g-3 m-auto col-8 mt-5" action="/Book/{{ $book->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-12">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control border-dark" value="{{ $book->title }}" name="title">
            </div>
            <div class="col-md-6">
                <label for="nim" class="form-label">Author</label>
                <input type="text" class="form-control border-dark" value="{{ $book->author}}" name="author">
            </div>
            <div class="col-md-6">
                <label for="major" class="form-label">Category</label>
                <select id="inputState" class="form-select border-dark" name="category">
                    <option value="{{ $book->category }}">{{ $book->category}}</option>
                    @foreach ($category as $data)
                        <option value="{{ $data->category }}">{{ $data->category }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
              <label for="email" class="form-label">Publisher</label>
              <input type="text" class="form-control border-dark" value="{{ $book->publisher }}"name="publisher">
            </div>
            <div class="col-md-6">
              <label for="phonenumber" class="form-label">Publication Year</label>
              <input type="number" min="1900" max="2099" value="{{ $book->publication_year }}" class="form-control border-dark" name="publication_year" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <label for="phonenumber" class="form-label">Stock</label>
                <input type="number" min="0" value="{{ $book->stock }}" class="form-control border-dark" name="stock" id="inputPassword4">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input class="form-control" value="{{ $book->image }}" type="file" id="image" name="image">
            </div>
            <div class="form-floating">
                <input type="textarea" value="{{ $book->sypnosis }}" class="form-control" placeholder="Leave a comment here"  name="sypnosis" id="floatingTextarea2" style="height: 100px">
                <label for="floatingTextarea2">Sypnosis</label>
                
            </div> 
              
            <div class="col-12 mb-3">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        
@endsection