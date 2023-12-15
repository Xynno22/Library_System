@extends('layout')


@section('container')

@include('header')

<div class="midDashboard">
    <div class="content-1"></div>
    <div class="content-2"></div>
    <div class="content-3"></div>
    <div class="content-4"></div>
</div>

<div class="thirdDashboard">
    <div class="list-1">
        <h3>Member List</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Major</th>
                    <th>Book Issued</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($memberlist as $member)
                    <tr>
                        <td>{{ $member->id}}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->major }}</td>
                        <td>10</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/MemberList">see all</a>
    </div>
    <div class="list-2">
        <h3>Book List</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Available</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($booklist as $book)
                    <tr>
                        <td>{{ $book->id}}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>10</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/MemberList">see all</a>
    </div>
</div>

<h3>Top Choices</h3>
<div class="top-choice">
    
    <div class="bookfav">
        @foreach ($favbook   as $data)
            <div class="listtop">
                <img src="Asset/{{ $data->image }}" alt="">
                <a href="/Detail/{{ $data->id }}">{{ $data->title }}</a>
                <p>{{ $data->author }}</p>
            </div>
        @endforeach
    </div>
</div>

@endsection