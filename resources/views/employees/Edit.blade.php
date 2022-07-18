@extends('employees.layout')

@section('content')

<div style="height: 30px;"></div>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Employee</h2>
            </div>

            <div style="height: 10px;"></div>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('employees.index')}}">Back</a>
            </div>  
        </div>
    </div>

    @if($errors->any())

    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>
            @foreach($errors->all() as $error)
             
            <li>{{ $error }}</li>

            @endforeach

        </ul>
    </div>

    @endif

    <form action="{{ route('employees.update',$employee->id)}}" method="POST">

        @csrf

        @method('PUT')

        <div style="height: 20px;"></div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>

                    <input type="text" name="Name" value="{{ $employee->Name }}" class="form-control" placeholder="Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>

                    <input type="text" name="Email" value="{{ $employee->Email }}" class="form-control" placeholder="Email">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>

                    <input type="text" name="Address" value="{{ $employee->Address }}" class="form-control" placeholder="Address">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone:</strong>

                    <input type="text" name="Phone" value="{{ $employee->Phone }}" class="form-control" placeholder="Phone">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
         </div>

    </form>

    @endsection
