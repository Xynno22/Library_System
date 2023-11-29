@extends('layout')


@section('container')
<div class="userlist">
    <h1>Member List</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Department</th>
                <th>Gmail</th>
                <th>Phone Number</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($memberlist as $member)
                <tr>
                    <td>{{ $member->member_id}}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->department }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->phonenumber }}</td>
                    <td>{{ $member->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection