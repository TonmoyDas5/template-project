@extends('backend.master')

@section('content')

<a href="form-create"  class="btn btn-outline-success my-2 py-2">Back Form</a>

<h1 class="bg-primary text-center py-2 text-white">Department List Show Table</h1>

<table class="table table-bordered border-danger">
    <thead>
        <tr class="text-center">
            <th>SL NO</th>
            <th>Department Name</th>
            >
    </thead>
    <tbody> 
<th>Action</th>
        </tr   @foreach($dptshow as $department)
        <tr>
           
            <td>{{$department->id}}</td>
            <td>{{$department->department_name}}</td>
            <td>
                <a href="" class="btn btn-primary">edit</a>
                <a href="" class="btn btn-danger">delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection