@extends('layout')


@section('container')

    <div>
        <form action="/Book-destroy/{{ $books->id }}" method="post">
            @csrf
            @method('DELETE')
            <div class="alert alert-danger" role="alert">
                Are you sure to delete book : {{ $books->id }} - {{ $books->title }}
              </div>
            <button class="btn btn-primary" type="submit">Yes</button>
            <a class="btn btn-danger" href="/BookList" role="button">No</a>
        </form>
    </div>
    
@endsection