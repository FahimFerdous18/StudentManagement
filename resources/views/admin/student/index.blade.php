@extends('admin.layout.master')
@section('title')
    Manage Student
@endsection
@section('content')
	<div class="container">
		<h4 class="text-center">Student Information</h4>
        <div class="d-flex justify-content-end mb-2">
             <a href="" class="btn btn-secondary">Trash</a>
        </div>
       
        @if(session()->has('message'))
            <h2 class="alert alert-danger">{{ session()->get('message') }}</h2>
        @endif
        @if(session()->has('success'))
            <h2 class="alert alert-success">{{ session()->get('success') }}</h2>
        @endif
		<table class="table" id ="data_table" data-page-length='5'>
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Image</th>
                    <th>Phone No.</th>
                    <th>Address</th>
                    <th>Action</th>
             </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
            @foreach($studentts as $studentt)
                
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $studentt->name }}</td>
                    <td>{{ $studentt->roll }}</td>
                    <td>
                        <img src="{{ Storage::url($studentt->image) }}" alt="" width="100">
                    </td>
                    <td>
                        {{ $studentt->phone_no }}
                    </td>
                    <td>
                        {{ $studentt->address }}
                    </td>
                    <td>
                        <a href="{{ Route('student.edit',$studentt->id) }}" class="btn btn-primary">edit</a>
                        <a href="{{Route('student.delete', $studentt->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <!-- Button trigger modal -->


            @endforeach
            </tbody>
			
			
		</table>
       
	</div>

@endsection
