@extends('layout')

@section('container')
        <h3 class="h3-DataMember">Update Loan Data</h3>

        <form class="row g-3 m-auto col-8 mt-4" action="/Loan/{{ $loan[0]->id }}"  method="POST">
            @csrf
            @method('PUT')
           
            <div class="col-md-6">
                <label for="nim" class="form-label">Book Title</label>
                <input class="form-control border-dark" list="datalistOptions" name="booktitle" id="exampleDataList" value="{{ $loan[0]->booktitle }}" placeholder="Type to search...">
                <datalist id="datalistOptions">
                    @foreach ($books as $data)
                    <option value="{{ $data->title }}">{{ $data->title }}</option>
                    @endforeach
                </datalist>      
            </div>
            <div class="col-md-6">
                <label for="exampleDataList" class="form-label">Member</label>
                <input class="form-control border-dark" list="datalistOptions" name="member" id="exampleDataList" value="{{ $loan[0]->member }}" placeholder="Type to search...">
                <datalist id="datalistOptions">
                    @foreach ($member as $data)
                    <option value="{{ $data->name }}">{{ $data->name }}</option>
                    @endforeach
                </datalist>      
            </div>
            <div class="col-md-6">
                <label for="nim" class="form-label">Loan Date</label>
                <input type="date" class="form-control border-dark" name="loan_date" value="{{ $loan[0]->loan_date }}">
            </div>
          
            <div class="col-md-6">
              <label for="email" class="form-label">Due Date</label>
              <input type="date" class="form-control border-dark"  name="due_date" value="{{ $loan[0]->due_date }}">
            </div>
            <div class="col-md-6 mb-3">
              <label for="phonenumber" class="form-label">Return Date</label>
              <input type="date" class="form-control border-dark" name="return_date" value="{{ $loan[0]->return_date }}" id="inputPassword4">
            </div>
            <div class="col-md-6 mb-3">
                <label for="major" class="form-label">Major</label>
                <select id="inputState" class="form-select border-dark" name="status">
                    <option value="{{ $loan[0]->status }}">{{ $loan[0]->status }}</option>
                    @foreach ($status as $data)
                        <option value="{{ $data->status }}">{{ $data->status }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        
@endsection