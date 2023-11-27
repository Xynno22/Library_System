@extends('layout')


@section('container')
<div class="headerDashboard">
    <div class="welcome">
        <h3>Hello, Leon!</h3>
        <div id="tanggal-waktu">
            {{ $formattedTime }}
        </div>
    </div>
    <div class="searchBar">
          <img src="Asset/Search.png" alt=""> 
          <input type="text" name="query" placeholder="search"> 
    </div>
</div>


@endsection