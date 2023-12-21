@extends('layout')

@section('container')
    <div class="bookDetail">
        <div class="detail">
            <img id="ImageDetail" src="{{ asset('public/image/'.$book->image) }}" alt=""></td>
        </div>
        <div>
            <h1>{{ $book->title }}</h1>
            <p><span>Author: </span> {{ $book->author }}</p>
            <p><span>Publisher: </span> {{ $book->publisher }} ({{ $book->publication_year }})</p>
            <p><span>Category: </span> {{ $book->category }}</p>
            <div class="sypnosis">
                <p><span>Sypnosis: </span><br> {{ $book->sypnosis }}</p>
            </div>
        </div>
       
        
    </div>

@endsection