@extends('layout')


@section('container')
<div class="userlist">
    
    <div class="memberHeader">
        <div> 
            <h3>Loan List</h3>
        </div>
        <div>
            <a class="btn btn-secondary" href="/addLoan" role="button">Add Data</a>
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
              <th scope="col">Book</th>
              <th scope="col">Member</th>
              <th scope="col">LoanDate</th>
              <th scope="col">DueDate</th>
              <th scope="col">ReturnDate</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
        </thead>
          <tbody>
              @foreach ($loan as $data)
              <tr>
                  <td scope="row">{{ $data->id}}</td>
                  <td>{{ $data->booktitle}}</td>
                  <td>{{ $data->member}}</td>
                  <td>{{ $data->loan_date }}</td>
                  <td>{{ $data->due_date }}</td>
                  <td>{{ $data->return_date }}</td>
                  <td>{{ $data->status }}</td>
                  <td><div class="action"><a href="/editLoan/{{$data->id}}"><img src="Asset/update.png" alt=""></a><a class="me-2" href="Loan-delete/{{$data->id}}"><img src="Asset/delete.png" alt=""></a></div></td>
              </tr>
              
          @endforeach
        </tbody>
    </table>
</div>
@endsection
