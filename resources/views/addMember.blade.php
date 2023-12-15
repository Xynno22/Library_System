@extends('layout')

@section('container')

    <div class="createMember">
        <form action="Member" method="post">
            @csrf
            <div>
                <label for="name">name</label>
                <input type="text" name="name">
                <label for="email">email</label>
                <input type="email" name="email">
                <label for="phonenumber">phone</label>
                <input type="tel" name="phonenumber">
                <label for="Address">Address</label>
                <input type="text" name="address">
                <label for="major">Major</label>
                <select name="major" id="">
                    <option value="">Select Major</option>
                    @foreach ($majors as $data)
                        <option value="{{ $data->major }}">{{ $data->major }}</option>
                    @endforeach
                </select>
            </div>
            <button>Create</button>
        </form>
    </div>
@endsection