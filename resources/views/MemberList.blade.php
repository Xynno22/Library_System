@extends('layout')


@section('container')
<div class="userlist">
    
    <div class="memberHeader">
        <div> 
            <h3>MemberList</h3>
        </div>
        <div>
            <a class="btn btn-secondary" href="/addMember" role="button">Add Data</a>
        </div>
    </div>
    

    
    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            <div style="text-align: center">{{Session()->get('message'); }}</div>
        </div>
    @endif
    
    <table class="table table-striped">
        <thead class="table-secondary">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Nim</th>
              <th scope="col">Major</th>
              <th scope="col">Gmail</th>
              <th scope="col">Phone Number</th>
              <th scope="col">Address</th>
              <th scope="col">Action</th>
            </tr>
        </thead>
          <tbody>
              @foreach ($memberlist as $member)
              <tr>
                  <td scope="row">{{ $member->id}}</td>
                  <td>{{ $member->name }}</td>
                  <td>{{ $member->nim}}</td>
                  <td>{{ $member->major }}</td>
                  <td>{{ $member->email }}</td>
                  <td>{{ $member->phonenumber }}</td>
                  <td>{{ $member->address }}</td>
                  <td><div class="action"><a href="/editMember/{{$member->id}}"><img src="Asset/update.png" alt=""></a><a class="me-2" href="/Member-delete/{{$member->id}}"><img src="Asset/delete.png" alt=""></a></div></td>
              </tr>
          @endforeach
        </tbody>
    </table>
</div>
@endsection