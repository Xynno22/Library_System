@extends('layout')


@section('container')

@include('header')

<div class="midDashboard">
    <div class="content">
        <h3>{{ $tmember }}</h3>
        <h6>Total Member</h6>
    </div>
    <div class="content">
        <h3>{{ $tbook }}</h3>
        <h6>Total books</h6>
    </div>
    <div class="content">
        <h3>{{ $tborrow }}</h3>
        <h6>Total Book Borrowed</h6>
    </div>
    <div class="content">
        <h3>{{ $tdelay }}</h3>
        <h6>Total Book Delay</h6>
    </div>
</div>

<div class="thirdDashboard">
    <div class="list1">
        <h3>Member List</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>NIM</th>
                    <th>Major</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($memberlist as $member)
                    <tr>
                        <td>{{ $member->id}}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->nim }}</td>
                        <td>{{ $member->major }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/MemberList">see all</a>
    </div>
    <div class="list2">
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
                        <td>{{ $book->stock }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/BookList">see all</a>
    </div>
</div>

<h3>Top Choices</h3>
<div class="top-choice">
    
    <div class="bookfav">
        @foreach ($favbook  as $data)
            <div class="listtop">
                <div class="topImage"><img src="{{ asset('public/image/'.$data->image) }}" alt=""></div> 
                <div>
                    <a href="/Detail/{{ $data->id }}">{{ $data->title }}</a>
                    <p>{{ $data->author }}</p>
                </div>     
                
            </div>
        @endforeach
    </div>
</div>

<div class="thirdDashboard">
    <div class="list1">
        <h3>Borrowed Book List</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Member</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookborrow as $book)
                    <tr>
                        <td>{{ $book->id}}</td>
                        <td>{{ $book->booktitle }}</td>
                        <td>{{ $book->member }}</td>
                        <td>{{ $book->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/loans">see all</a>
    </div>
    <div class="list2">
        <h3>Delay Book List</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Member</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookdelay as $book)
                    <tr>
                        <td>{{ $book->id}}</td>
                        <td>{{ $book->booktitle }}</td>
                        <td>{{ $book->member }}</td>
                        <td>{{ $book->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/loans">see all</a>
    </div>
</div>

@endsection