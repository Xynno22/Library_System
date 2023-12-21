@extends('layout')


@section('container')

    <div>
        <form action="/Loan-destroy/{{ $loan->id }}" method="post">
            @csrf
            @method('DELETE')
            <div class="alert alert-danger" role="alert">
                Are you sure to delete book : {{ $loan->id }} - {{ $loan->booktitle }} by {{ $loan->member }}
              </div>
            <button class="btn btn-primary" type="submit">Yes</button>
            <a class="btn btn-danger" href="/loans" role="button">No</a>
        </form>
    </div>
    
@endsection