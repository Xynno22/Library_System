@extends('layout')


@section('container')
<div class="userlist">
    
    <h1>Member List</h1>
    <a href="/addMember"><button class="addData">Add Data</button></a> 

   

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Major</th>
                <th>Gmail</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($memberlist as $member)
                <tr>
                    <td>{{ $member->id}}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->major }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->phonenumber }}</td>
                    <td>{{ $member->address }}</td>
                    <td><div class="action"><a href="/editMember/{{$member->id}}"><img src="Asset/update.png" alt=""></a><a href=""><img src="Asset/delete.png" alt=""></a></div></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection