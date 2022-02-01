@extends('layouts.master')
@section('headings')
Payments
@endsection
@section('small-headings')
Wallet Payment
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
              <h3 class="box-title">Wallet Payment</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
	<form action="{{route('store.wallet-payment')}}" method="POST">
		{{csrf_field()}}
		 <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Wallet</label>
                  <select class="form-control select2" name="wallet">
                    <option>Choose Wallet Type</option>
                    <option>eSewa</option>
                    <option>IME Pay</option>
                    <option>Khalti</option>
                    <option>PrabhuPay</option>
                    <option>QPay Nepal</option>
                  </select>
                  @if($errors->has('u_type'))
                      <span class="text-danger">{{$errors->first('u_type')}}</span>
                  @endif
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">ID</label>
                  <input type="text" class="form-control" id="id" name="id" placeholder="Enter wallet ID" value="{{old('id')}}">
                  @if($errors->has('id'))
                      <span class="text-danger">{{$errors->first('id')}}</span>
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
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                  <input type="hidden" name="payment_type" id="payment_type" value="Wallet Payment">
                </div>
              </div> 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Proceed</button>
              </div>
            </form>
          </div>

@endsection