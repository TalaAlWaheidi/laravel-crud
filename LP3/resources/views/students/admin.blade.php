@extends('layout.layout')

@section('body')

<div class="container-md pt-5">
    <a href="{{ url('form') }}"  class=" btn btn-warning" role="button">Add Student</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">User Name</th>
            <th scope="col">National ID</th>
            <th scope="col">E-mail</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Image</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($student as $key => $value)
          <tr>
            <td>{{$value['id']}}</td>
            <td>{{$value['national_id']}}</td>
            <td>{{$value['student_name']}}</td>
            <td>{{$value['student_email']}}</td>
            <td>{{$value['student_phone']}}</td>
            <td>{{$value['student_address']}}</td>
            <td><img src="/images/{{$value['student_image']}} " style="height: 90px; width:90px;"></td>
            <td><a href="update/{{ $value['id'] }}" role="button" class="btn btn-info">Edit</a></td>
            <td><a class="btn btn-danger" role="button" href="student/{{$value['id']}}">Delete</a></td>
            @endforeach
          </tr>
        </tbody>
      </table>
@endsection
