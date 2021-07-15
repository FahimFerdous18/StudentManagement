@extends('admin.layout.master')
@section('title')
    Add New Student
@endsection
@section('content')
  <div class="container">
    <form action="{{ Route('student.store' )}}" class="w-50 m-auto" method="post" enctype="multipart/form-data">
      @if(session()->has('message'))
        <h4 class="alert alert-success">{{ session()->get('message') }}</h4>
      @endif
      @csrf
      <h4 id="message" class="text-danger"></h4>
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="name" id = "name">
        <span class="text-danger">@error('name') {{ $message }}@enderror</span>
      </div>
      <div class="form-group">
        <label for="">Roll</label>
        <input type="text" class="form-control" name="roll" id = "roll">
        <span class="text-danger">@error('roll') {{ $message }}@enderror</span>
      </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="image" id = "image">
                    <span class="text-danger">@error('image') {{ $message }}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="">Phone No</label>
                    <input type="text" class="form-control" name="phone" id = "phone">
                    <span class="text-danger">@error('phone') {{ $message }}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" id="" rows="5" class="form-control"></textarea>
                    <span class="text-danger">@error('address') {{ $message }}@enderror</span>
                </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" name = "submit" value="add student" id="submit">
      </div>
    </form>
  </div>


@endsection
