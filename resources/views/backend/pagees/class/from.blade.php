@extends('backend.master')

@section('content')@ex

<a href="{{url('instiute name')}}"  class="btn btn-outline-success my-2 py-2">view List</a>

<h1 class="bg-primary text-center py-2 text-white">institute add form</h1>
<form action="" method="post">
    <div class="form-group">
        <label for="name">institiute Name</label>
        <input type="text" name="institute_name" class="form-control" placeholer="Type  teacher name">
    </div>
    <div class="form-group">
        <label for="Address">class Address</label>
        <input type="text" name="class_name" class="form-control" placeholer="Type  teacher Address">
    </div>
    <div class="form-group">
        <label for="subject">class section</label>
        <input type="text" name="class section" class="form-control" placeholer="Type  teacher subject">
    </div>

</div>
    <div class="form-group">
        <label for="Detels">class Room number_ <code></code></label>
        <input type="text" name="class" class="form-control" placeholer="Type  teacher Detels">
    </div>
    
    <button>Save</button>
</form>


@endsection