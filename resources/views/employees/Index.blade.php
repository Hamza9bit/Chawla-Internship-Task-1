@extends('employees.layout')

@section('content') 

<div style="height: 30px;"></div>

<div class = "float-left">
    <h2>&nbsp&nbspManage Employees&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h2>
</div>

<div class = "row" style="height: 80px;">
    <div class = "col-lg-12 margin-t8b">

        <div class = "float-left" >

        <a class = "btn btn-success" href="{{route('employees.create') }}"> Add New Employee</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
  
    <div class="alert alert-success">
        
        <p>{{$message}}</p>
    </div>

@endif

<table class="table table-bordered">

    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th> 
        <th>Address</th> 
        <th>Phone</th> 
        <th width="280px">Action</th>
    </tr>

    @foreach ($employees as $employee)

    <tr>
        <td>{{++$i}}</td>
        <td>{{$employee->Name}}</td>
        <td>{{$employee->Email}}</td>
        <td>{{$employee->Address}}</td>
        <td>{{$employee->Phone}}</td>
        <td>
            <form action="{{ route('employees.destroy',$employee->id) }}" method = "POST">

                  <!-- <a class="btn btn-info" href="{{ route('employees.show', $employee->id) }}">View</a> -->

                  <a class="btn btn-primary" href="{{ route('employees.edit', $employee->id) }}">Edit</a>

                  @csrf

                  @method('DELETE') 

                  <button type="submit" class = "btn btn-danger">Delete</button>

            </form>
          </td>
    </tr>

    @endforeach

</table>


