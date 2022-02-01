@extends('layouts.master')
@section('headings')
Add
@endsection
@section('small-headings')
User
@endsection
@section('content')
@if(Session::has('message'))
<div class="callout callout-success" data-expires="1000">
        <h4>{{session('message')}}</h4>
        </div>
 @endif
 <!-- @if($errors->any())
 <span>{{$errors}}</span>

@endif -->
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
	<form action="{{route('store.user')}}" method="POST">
		{{csrf_field()}}
    <div class="row">
      <div class="form-group col-md-6 has-feedback">
        <label for="exampleInputEmail1">FullName <span class="text-danger">*</span></label>
        <input id="name" type="text" class="form-control{{ $errors->has('name') ? 'has-error' : '' }}" name="name" value="{{ old('name') }}" placeholder="Enter Fullname" required autofocus>
        @if ($errors->has('name'))
                       <span class="has-error" role="alert">
                       <strong>{{ $errors->first('name') }}</strong>
                       </span>
       @endif
      </div>

		  
          <div class="form-group col-md-6 has-feedback">
            <label for="exampleInputEmail1">Email <span class="text-danger">*</span></label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Enter Email">
        @if ($errors->has('email'))
                        <span class="invalid-feedback text-danger" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
          @endif
      </div>
    </div>
      <div class="form-group has-feedback">
        <label for="exampleInputEmail1">Password <span class="text-danger">*</span></label>
          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Enter Password">
              @if ($errors->has('password'))
                <span class="invalid-feedback text-danger" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
      </div>

      <div class="form-group has-feedback">
        <label for="exampleInputEmail1">Confirm Password <span class="text-danger">*</span></label>
         <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
      </div>
      <div class="row">
      <div class="form-group col-md-4 has-feedback">
        <label for="exampleInputEmail1">Account Type <span class="text-danger">*</span></label>
          <select class="form-control select2" name="acc_type" id="acc_type">
              <option value="">Choose Account Type</option>
              <option value="saving">Saving</option>
              <option value="current">Current</option>
          </select>
              @if($errors->has('acc_type'))
                  <span class="text-danger">{{$errors->first('acc_type')}}</span>
              @endif
      </div>

      <div class="form-group col-md-4 has-feedback">
        <label for="exampleInputEmail1">Gender <span class="text-danger">*</span></label>
          <select class="form-control select2" name="gender" id="gender">
              <option value="">Choose Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
          </select>
              @if($errors->has('gender'))
                  <span class="text-danger">{{$errors->first('gender')}}</span>
              @endif
      </div>
      <div class="form-group col-md-4 has-feedback">
        <label for="exampleInputEmail1">Phone <span class="text-danger">*</span></label>
          <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" placeholder="Enter Phonenumber" required autofocus>
                  @if ($errors->has('phone'))
                      <span class="invalid-feedback text-danger" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                      </span>
                  @endif
      </div>
</div>
      

      <div class="form-group col-md-4">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                <label for="exampleInputEmail1">Date Of Birth <span class="text-danger">*</span></label>
            <input type="Date" class="form-control" name="dob" id="dob" placeholder="Enter DOB as dd/mm/yyyy" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                  @if ($errors->has('dob'))
                       <span class="invalid-feedback text-danger"  role="alert">
                          <strong>{{ $errors->first('dob') }}</strong>
                       </span>
                  @endif
            </div>
                <!-- /.input group -->
      </div>

      <!-- <div class="form-group col-md-4 has-feedback">
        <label for="exampleInputEmail1">Account Number</label>
          <input id="acc_num" type="text" class="form-control{{ $errors->has('acc_num') ? ' is-invalid' : '' }}" name="acc_num" value="{{ old('acc_num') }}" placeholder="Enter Account Number" required autofocus>
              @if ($errors->has('acc_num'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('acc_num') }}</strong>
                  </span>
                  @endif
      </div> -->

      <div class="form-group col-md-4 has-feedback">
        <label for="exampleInputEmail1">Address <span class="text-danger">*</span></label>
        <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" placeholder="Enter Address" required autofocus>
            @if ($errors->has('address'))
                <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
      </div>
      <br>
      <div class="row col-md-6 col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Add</button>
      </div>
  </form>
</div>

@endsection