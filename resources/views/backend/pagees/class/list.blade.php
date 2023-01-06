@extends('backend.master')

@section('content')

<a href=""  class="btn btn-outline-success my-2 py-2">Back Form</a>

<h1 class="bg-primary text-center py-2 text-white">class List Show Table</h1>

<table class="table table-bordered border-danger">
    <thead>
        <tr class="text-center">
            <th>SL NO</th>
            <th>class Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody> 

    
        <tr>
           
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