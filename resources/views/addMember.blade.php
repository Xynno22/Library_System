@extends('layout')

@section('container')

        <h3 class="h3-DataMember">Add Data Member</h3>

        <form class="row g-3 m-auto col-8 mt-5" action="Member" method="post">
            @csrf
            <div class="col-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control border-dark" name="name">
            </div>
            <div class="col-md-6">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control border-dark" name="nim">
            </div>
            <div class="col-md-6">
                <label for="major" class="form-label">Major</label>
                <select id="inputState" class="form-select border-dark" name="major">
                    <option value="">Select Major</option>
                    @foreach ($majors as $data)
                        <option value="{{ $data->major }}">{{ $data->major }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control border-dark" name="email">
            </div>
            <div class="col-md-6">
              <label for="phonenumber" class="form-label">Phone Number</label>
              <input type="tel" class="form-control border-dark" name="phonenumber" id="inputPassword4">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control border-dark" name="address" id="inputAddress">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
        
@endsection