@extends('backend.master')

@section('content')

<a href="{{url('teacher-list')}}"  class="btn btn-outline-success my-2 py-2">view List</a>

<h1 class="bg-primary text-center py-2 text-white">Teacher add form</h1>
<form action="" method="post">
    <div class="form-group">
        <label for="name">Teacher Name</label>
        <input type="text" name="teacher_name" class="form-control" placeholer="Type  teacher name">
    </div>
    <div class="form-group">
        <label for="Address">Teacher Address</label>
        <input type="text" name="teacher_name" class="form-control" placeholer="Type  teacher Address">
    </div>
    <div class="form-group">
        <label for="subject">Teacher subject</label>
        <input type="text" name="teacher_subject" class="form-control" placeholer="Type  teacher subject">
    </div>

</div>
    <div class="form-group">
        <label for="Detels">Teacher Details</label>
        <input type="text" name="teacher_Detels" class="form-control" placeholer="Type  teacher Detels">
    </div>
</form>


@endsection