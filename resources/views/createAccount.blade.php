@extends('layouts.master')
@section('headings')
Account
@endsection
@section('small-headings')
Creation
@endsection
@section('content')
@if(Session::has('message'))
<div class="callout callout-success" data-expires="1000">
        <h4>{{session('message')}}</h4>
        </div>
 @endif
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Account</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
	<form action="#" method="POST">
		{{csrf_field()}}
    <div class="form-group">
                  <label for="exampleInputEmail1">Full Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name" value="{{old('name')}}">
                  @if($errors->has('name'))
                      <span class="text-danger">{{$errors->first('name')}}</span>
                  @endif
                </div>
		        <div class="box-body">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" id="mail" name="mail" placeholder="Enter email" value="{{old('mail')}}">
                  @if($errors->has('mail'))
                      <span class="text-danger">{{$errors->first('mail')}}</span>
                  @endif
                </div>

                <div class="form-group has-feedback">
                  <select class="form-control select2" name="acc_type">
                    <option>Choose Account Type</option>
                    <option value="saving">Saving</option>
                    <option value="current">Current</option>
                  </select>
                </div>

                <div class="form-group has-feedback">
                  <label for="exampleInputEmail1">Account Number</label>
                 <input id="acc_num" type="text" class="form-control{{ $errors->has('acc_num') ? ' is-invalid' : '' }}" name="acc_num" value="{{ old('acc_num') }}" placeholder="Enter Account Number" required autofocus>
               <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                 
            </div>
            <div class="form-group has-feedback">
              <label for="exampleInputEmail1">Phone</label>
        <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" placeholder="Enter Phonenumber" required autofocus>
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
       </div>

            <div>
              <label for="exampleInputEmail1">Date Of Birth</label>
              <input type="text" class="form-control" name="dob" id="dob" placeholder="Enter DOB as dd/mm/yyyy" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
            </div>

              <div class="form-group has-feedback">
                <label for="exampleInputEmail1">Gender</label>
                <input id="gender" type="gender" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="{{ old('gender') }}" required placeholder="Enter Gender">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>

                <div class="form-group has-feedback">
                  <label for="exampleInputEmail1">Address</label>
                    <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" placeholder="Enter Address" required autofocus>
                <span class="glyphicon glyphicon-home form-control-feedback"></span>
                </div> 

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Proceed</button>
              </div>

            </form>
          </div>

@endsection