@extends('layout')

@section('container')

    <div class="createMember">
        <form action="/Member/{{ $members->id }}" method="POST">
            @method('PUT')
            @csrf
            <div>
                <label for="name">name</label>
                <input type="text" name="name" value="{{ $members->name }}">
                <label for="email">email</label>
                <input type="email" name="email" value="{{ $members->email }}">
                <label for="phonenumber">phone</label>
                <input type="tel" name="phonenumber" value="{{ $members->phonenumber }}">
                <label for="Address">Address</label>
                <input type="text" name="address" value="{{ $members->address }}">
                <label for="major">Major</label>
                <select name="major" id="">
                    <option value="{{ $members->major }}">{{ $members->major }}</option>
                    @foreach ($majors as $data)
                    <option value="{{ $data->major }}">{{ $data->major }}</option>
                @endforeach
                </select>
            </div>
            <button>Update</button>
        </form>
    </div>
@endsection