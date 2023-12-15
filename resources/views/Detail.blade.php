@extends('layout')

@section('container')
    <div class="bookDetail">
        <img src="{{ asset('Asset/' . $book->image) }}" alt="">
        <div class="detail">
            <h1>{{ $book->title }}</h1>
        </div>
    </div>

@endsection