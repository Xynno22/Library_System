@extends('layout')

@section('container')

        <h3 class="h3-DataMember">Add Book Data</h3>

        <form class="row g-3 m-auto col-8 mt-5" action="Book" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control border-dark" name="title">
            </div>
            <div class="col-md-6">
                <label for="nim" class="form-label">Author</label>
                <input type="text" class="form-control border-dark" name="author">
            </div>
            <div class="col-md-6">
                <label for="major" class="form-label">Category</label>
                <select id="inputState" class="form-select border-dark" name="category">
                    <option value="">Select Category</option>
                    @foreach ($category as $data)
                        <option value="{{ $data->category }}">{{ $data->category }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
              <label for="email" class="form-label">Publisher</label>
              <input type="text" class="form-control border-dark" name="publisher">
            </div>
            <div class="col-md-6">
              <label for="phonenumber" class="form-label">Publication Year</label>
              <input type="number" min="1900" max="2099" class="form-control border-dark" name="publication_year" id="inputPassword4">
            </div>
            <div class="col-md-6">
                <label for="phonenumber" class="form-label">Stock</label>
                <input type="number" min="0" class="form-control border-dark" name="stock" id="inputPassword4">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" name="sypnosis" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Sypnosis</label>
            </div>
              
            <div class="col-12 mb-3">
              <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
        
@endsection