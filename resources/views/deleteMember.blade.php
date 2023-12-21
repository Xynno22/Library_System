@extends('layout')


@section('container')

    <div>
        <form action="/Member-destroy/{{ $members->id }}" method="post">
            @csrf
            @method('DELETE')
            <div class="alert alert-danger" role="alert">
                Are you sure to delete member : {{ $members->name }} - {{ $members->nim }}
              </div>
            <button class="btn btn-primary" type="submit">Yes</button>
            <a class="btn btn-danger" href="/MemberList" role="button">No</a>
        </form>
    </div>
    
@endsection