@extends('admin.layout.master')
@section('title')
    Edit Student Information
@endsection
@section('content')
    <div class="container">

        <form action="{{ Route('student.update',$std->id )}}" class="w-50 m-auto" method="post">
            @if(session()->has('message'))
                <h4 class="alert alert-success">{{ session()->get('message') }}</h4>
            @endif
            @csrf
            <h4 id="message" class="text-danger"></h4>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" id = "name" value="{{ $std->name }}">
                <span class="text-danger">@error('name') {{ $message }}@enderror</span>
            </div>
            <div class="form-group">
                <label for="">Roll</label>
                <input type="text" class="form-control" name="roll" id = "roll" value="{{ $std->roll }}">
                <span class="text-danger">@error('roll') {{ $message }}@enderror</span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name = "submit" value="Update" id="submit">
            </div>
        </form>

    </div>


@endsection
