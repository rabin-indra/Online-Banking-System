@extends('layouts.master')
@section('headings')
Payments
@endsection
@section('small-headings')
Utilities Payment
@endsection
@section('content')
@if(Session::has('message'))
<div class="callout callout-success" data-expires="1000">
        <h4>{{session('message')}}</h4>
        </div>
 @endif
 @if(Session::has('error'))
  <div class="callout callout-danger" data-expires="1000">
        <h4>{{session('error')}}</h4>
    </div>
@endif
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Utilities Payment</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
	<form action="{{route('store.utility-payment')}}" method="POST">
		{{csrf_field()}}
		 <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Utility</label>
                  <select class="form-control select2" name="utility">
                    <option value=''>Choose Utilities Type</option>
                    <option value="Internet">Internet</option>
                    <option value="Set-top box">Set-top Box</option>
                    <option value ="Electricity">Electricity</option>
                    <option value="Khane Pani">Khane Pani</option>
                  </select>
                  @if($errors->has('u_type'))
                      <span class="text-danger">{{$errors->first('u_type')}}</span>
                  @endif
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" id="u_name" name="u_name" placeholder="Enter username" value="{{old('u_name')}}">
                  @if($errors->has('u_name'))
                      <span class="text-danger">{{$errors->first('u_name')}}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Amount</label>
                  <input type="text" class="form-control" id="amt" name="amt" placeholder="Enter Amount" value="{{old('amt')}}">
                  @if($errors->has('amt'))
                      <span class="text-danger">{{$errors->first('amt')}}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label>Purpose</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." name="purpose"></textarea>
                  <input type="hidden" name="payment_type" id="payment_type" value="1">
                </div>
              </div> 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Proceed</button>
              </div>
            </form>
          </div>

@endsection