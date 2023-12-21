@extends('layout')


@section('container')
<div class="booklist">
    
    <div class="memberHeader">
        <div> 
            <h3>BookList</h3>
        </div>
        <div>
            <a class="btn btn-secondary" href="/addBook" role="button">Add Data</a>
        </div>
    </div>

    
    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            <div style="text-align: center">{{Session()->get('message'); }}</div>
        </div>
    @endif
    
    <table class="table table-striped">
        <thead class="table-secondary">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Cover</th>
              <th scope="col">Title</th>
              <th scope="col">Author</th>
              <th scope="col">Category</th>
              <th scope="col">Detail</th>
              <th scope="col">Stock</th>
              <th scope="col">Action</th>
            </tr>
        </thead>
          <tbody>
              @foreach ($book as $data)
              <tr>
                  <td scope="row">{{ $data->id}}</td>
                  <td> <img id="imageTable" src="{{ asset('public/image/'.$data->image) }}" alt=""></td>
                  <td>{{ $data->title}}</td>
                  <td>{{ $data->author }}</td>
                  <td>{{ $data->category}}</td>
                  <td><a href="/Detail/{{ $data->id }}">View Detail</a></td>
                  <td>{{ $data->stock }}</td>
                  <td><div class="action"><a href="/editBook/{{$data->id}}"><img src="Asset/update.png" alt=""></a><a class="me-2" href="/Book-delete/{{$data->id}}"><img src="Asset/delete.png" alt=""></a></div></td>
              </tr>
          @endforeach 
        </tbody>
    </table>
</div>

@endsection