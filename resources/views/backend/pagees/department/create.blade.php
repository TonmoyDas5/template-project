@extends('backend.master')

@section('content')
<div class="container">
    @if(Session::has('msg'))
    <p class="alert alert-danger">{{Session::get('msg')}}</p>
    @endif
    <form action="{{route('store.data')}}" method="post">
        @csrf
        <div class="mt-5">
            <label for="department_name">Department Name :</label>
            <input type="text" name="department_name" class="form-control" placeholer="enter department name">
            <div>
                @error('department_name')
                <strong class="text-danger">{{$message}}</strong>
                @enderror
            </div>
        </div>

        <div class="mt-5">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

    </form>
</div>

@endsection