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

    </div>
    <div class="list-2">
        
    </div>
</div>

@endsection