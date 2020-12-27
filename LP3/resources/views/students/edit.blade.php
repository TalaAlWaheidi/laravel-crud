@extends('layout.layout')
@section('title')
    Student Form
@endsection

{{-- @section('style')
    <link href="../../style/style.css">
@endsection --}}

<style>

body {
    color: #999;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.form-control, .form-control:focus, .input-group-addon {
    border-color: #e1e1e1;
    border-radius: 0;
}
.signup-form {
    width: 390px;
    margin: 0 auto;
    padding: 30px 0;
}
.signup-form h2 {
    color: #636363;
    margin: 0 0 15px;
    text-align: center;
}
.signup-form .lead {
    font-size: 14px;
    margin-bottom: 30px;
    text-align: center;
}
.signup-form form {
    border-radius: 1px;
    margin-bottom: 15px;
    background: #fff;
    border: 1px solid #f3f3f3;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.signup-form .form-group {
    margin-bottom: 20px;
}
.signup-form label {
    font-weight: normal;
    font-size: 13px;
}
.signup-form .form-control {
    min-height: 38px;
    box-shadow: none !important;
    border-width: 0 0 1px 0;
}
.signup-form .input-group-addon {
    max-width: 42px;
    text-align: center;
    background: none;
    border-width: 0 0 1px 0;
    padding-left: 5px;
}
.signup-form .btn {
    font-size: 16px;
    font-weight: bold;
    background: #19aa8d;
    border-radius: 3px;
    border: none;
    min-width: 140px;
    outline: none !important;
}
.signup-form .btn:hover, .signup-form .btn:focus {
    background: #179b81;
}
.signup-form a {
    color: #19aa8d;
    text-decoration: none;
}
.signup-form a:hover {
    text-decoration: underline;
}
.signup-form .fa {
    font-size: 21px;
}
.signup-form .fa-paper-plane {
    font-size: 17px;
}
.signup-form .fa-check {
    color: #fff;
    left: 9px;
    top: 18px;
    font-size: 7px;
    position: absolute;
}

</style>


@section('body')

    <div class="signup-form">
        <form action="{{ route('update',$row['id']) }}" method="post" enctype="multipart/form-data">
            @csrf
            <h2>Update Account</h2>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="nid" placeholder="National ID" required="required" value="{{$row['national_id']}}">
                    @error('nid')
                    <p style="color: red; font-size:0.7rem"> {{$message}} </p>
                  @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="username" placeholder="Your Full Name" required="required" value="{{$row['student_name']}}">
                </div>
                @error('username')
                <p style="color: red; font-size:0.7rem"> {{$message}} </p>
              @enderror
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                    <input type="email" class="form-control" name="email" placeholder="Email Address" required="required" value="{{$row['student_email']}}">
                    @error('email')
                    <p style="color: red; font-size:0.7rem"> {{$message}} </p>
                  @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input type="text" class="form-control" name="mobile" placeholder="Your Mobile Phone" required="required" value="{{$row['student_phone']}}">
                    @error('mobile')
                    <p style="color: red; font-size:0.7rem"> {{$message}} </p>
                  @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="address" placeholder="Your Address" required="required" value="{{$row['student_address']}}">
                    @error('address')
                    <p style="color: red; font-size:0.7rem"> {{$message}} </p>
                  @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="file" class="form-control" name="image" placeholder="Upload Your Image" required="required" value="{{$row['student_image']}}">
                    @error('image')
                    <p style="color: red; font-size:0.7rem"> {{$message}} </p>
                  @enderror
                </div>
            </div>
            <div class="form-group">
                <button type="submit" name="signup" class="btn btn-primary btn-block btn-lg">Update</button>
            </div>
        </form>
    </div>

@endsection
