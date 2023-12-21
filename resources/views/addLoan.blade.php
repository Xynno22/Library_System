@extends('layout')

@section('container')

        <h3 class="h3-DataMember">Add Loan Data</h3>

        <form class="row g-3 m-auto col-8 mt-4" action="Loan" method="post">
            @csrf
           
            <div class="col-md-6">
                <label for="booktitle" class="form-label">Book Title</label>
                <input class="form-control border-dark" list="datalistOption1" name="booktitle" id="exampleDataList1" placeholder="Type to search...">
                <datalist id="datalistOption1">
                    @foreach ($book as $data)
                        <option value="{{ $data->title }}">{{ $data->title }}</option>
                    @endforeach
                </datalist>      
            </div>
            <div class="col-md-6">
                <label for="member" class="form-label">Member</label>
                <input class="form-control border-dark" list="datalistOption2" name="member" id="exampleDataList2" placeholder="Type to search...">
                <datalist id="datalistOption2">
                    @foreach ($members as $data)
                        <option value="{{ $data->name }}"></option>
                    @endforeach
                </datalist>      
            </div>
            <div class="col-md-6">
                <label for="loan_date" class="form-label">Loan Date</label>
                <input type="date" class="form-control border-dark" name="loan_date">
            </div>
          
            <div class="col-md-6">
              <label for="due_date" class="form-label">Due Date</label>
              <input type="date" class="form-control border-dark" name="due_date">
            </div>
            <div class="col-md-6 mb-3">
              <label for="return_date" class="form-label">Return Date</label>
              <input type="date" class="form-control border-dark" name="return_date" id="inputPassword4">
            </div>
            <div class="col-md-6 mb-3">
                <label for="status" class="form-label">Status</label>
                <select id="inputState" class="form-select border-dark" name="status">
                    <option value="">Select Status</option>
                    @foreach ($status as $data)
                        <option value="{{ $data->status }}">{{ $data->status }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
        
@endsection