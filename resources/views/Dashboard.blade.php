@extends('layout')


@section('container')
<div class="headerDashboard">
    <div class="welcome">
        <h3>Hello, <p>Leon!</p></h3>
        <div id="tanggal-waktu">
            {{ $formattedTime }}
        </div>
    </div>
    <div class="searchBar">
          <img src="Asset/Search.png" alt=""> 
          <input type="text" class="search" placeholder="search...">
    </div>
</div>

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
                    <th>Department</th>
                    <th>Book Issued</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($memberlist as $member)
                    <tr>
                        <td>{{ $member->member_id}}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->department }}</td>
                        <td>10</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/MemberList">see all</a>
    </div>
    <div class="list-2">
        
    </div>
</div>

<h3>Top Choices</h3>
<div class="top-choice">
    
    <div class="bookfav">
        @foreach ($booklist as $data)
            <div class="listtop">
                <img src="Asset/{{ $data->image }}" alt="">
                <a href="">{{ $data->title }}</a>
                <p>{{ $data->author }}</p>
            </div>
        @endforeach
    </div>
</div>

@endsection