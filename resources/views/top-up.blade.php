@extends('layouts.master')
@section('headings')
Fund Transfer
@endsection
@section('small-headings')
Top-up
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
              <h3 class="box-title">Top-Up</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
	<form action="{{route('store.topup')}}" method="POST">
		{{csrf_field()}}
		 <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone Number</label>
                  <input type="text" class="form-control" id="num" name="num" placeholder="Enter Phone Number" value="{{old('num')}}">
                  @if($errors->has('num'))
                      <span class="text-danger">{{$errors->first('num')}}</span>
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
                  <textarea class="form-control" rows="3" name="purpose" id="purpose" placeholder="Enter ..."></textarea>
                  <input type="hidden" name="transaction_type" id="transaction_type" value="Top-Up">
                </div>
              </div> 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Proceed</button>
              </div>
            </form>
          </div>

@endsection