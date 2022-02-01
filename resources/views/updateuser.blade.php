@extends('layouts.master')
@section('headings')
User
@endsection
@section('small-headings')
Update
@endsection
@section('content')
@if(Session::has('message'))
	<div class="callout callout-success" data-expires="1000">
        <h4>{{session('message')}}</h4>
    </div>
@endif
<div class="box box-primary">
	<div class="box-header with-border">
        <h3 class="box-title">Update User</h3>
    </div>

    <form action="{{route('update.user',$user->id)}}" method="POST">
    	{{csrf_field()}}
    <div class="row">
      <div class="form-group col-md-6 has-feedback">
        <label for="exampleInputEmail1">FullName</label>
        <input id="name" type="text" class="form-control{{ $errors->has('name') ? 'has-error' : '' }}" name="name" value="{{ $user->name }}" placeholder="Enter Fullname" required autofocus>
        @if ($errors->has('name'))
                       <span class="has-error" role="alert">
                       <strong>{{ $errors->first('name') }}</strong>
                       </span>
       @endif
      </div>

		  
          <div class="form-group col-md-6 has-feedback">
            <label for="exampleInputEmail1">Email</label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required placeholder="Enter Email">
        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
          @endif
      </div>
    </div>
    <div class="row">
    <div class="form-group col-md-4 has-feedback">
        <label for="exampleInputEmail1">Phone</label>
          <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $user->phone_number }}" placeholder="Enter Phonenumber" required autofocus>
                  @if ($errors->has('phone'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                      </span>
                  @endif
      </div>
      <div class="form-group col-md-4 has-feedback">
        <label for="exampleInputEmail1">Account Status</label>
          <select class="form-control select2" name="status">
              <option>Choose Account Status</option>
              <option value="1" {{ ($user->account->status == 1 ) ? "selected": "" }}>Active</option>
              <option value="0" {{ ($user->account->status == 0 ) ? "selected": "" }}>Deactive</option>
          </select>
              @if($errors->has('status'))
                  <span class="text-danger">{{$errors->first('status')}}</span>
              @endif
      </div>
  </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection