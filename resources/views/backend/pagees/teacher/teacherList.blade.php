@extends('backend.master')

@section('content')

<a href="{{route('teacher.form')}}"  class="btn btn-outline-success my-2 py-2">Add List</a>

<h1 class="bg-primary text-center py-2 text-white">Teacher List Show Table</h1>

<table class="table table-bordered">
    <thead>
        <tr class="text-center">
            <th>SL NO</th>
            <th>Teacher Name</th>
            <th>Teacher Phone</th>
            <th>Teacher Email Address</th>
            <th>Teacher Department</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody> 
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <a href="" class="btn btn-primary">edit</a>
                <a href="" class="btn btn-danger">delete</a>
            </td>
        </tr>
    </tbody>
</table>

@endsection