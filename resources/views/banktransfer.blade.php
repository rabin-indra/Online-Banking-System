@extends('layouts.master')
@section('headings')
Fund Transfer
@endsection
@section('small-headings')
Bank Transfer
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
              <h3 class="box-title">Bank Transfer</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
	<form action="{{route('fund.transfer')}}" method="POST">
		{{csrf_field()}}
    <div class="form-group">
                  <label for="exampleInputEmail1">Amount</label>
                  <input type="text" class="form-control" id="amt" name="amt" placeholder="Enter Amount" value="{{old('amt')}}">
                  @if($errors->has('amt'))
                      <span class="text-danger">{{$errors->first('amt')}}</span>
                  @endif
                </div>
		 <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Bank</label>
                  <select class="form-control select2" name="bank">
                    <option value="">Choose Bank</option>
                    <option value="NIC ASIA">NIC ASIA</option>
                    <option value="Prabhu Capitals Ltd">Prabhu Capitals Ltd</option>
                    <option value="Siddartha Bank Ltd">Siddartha Bank Ltd</option>
                    <option value="Kumari Bank Ltd">Kumari Bank Ltd</option>
                    <option value="Nabil Bank Ltd">Nabil Bank Ltd</option>
                    <option value="Nepal Investment Ltd">Nepal Investment Ltd</option>
                    <option value="Nepal SBI Bank Ltd">Nepal SBI Bank Ltd</option>
                    <option value="Everest Bank Ltd">Everest Bank Ltd</option>
                    <option value="Nepal Bank Ltd">Nepal Bank Ltd</option>
                    <option value="Citizens Bank International Ltd">Citizens Bank International Ltd</option>
                    <option value="Prime Commercial Bank Ltd">Prime Commercial Bank Ltd</option>
                    <option value="Sunrise Bank Ltd">Sunrise Bank Ltd</option>
                    <option value="Century Commercial Bank Ltd">Century Commercial Bank Ltd</option>
                    <option value="Sanima Bank Ltd">Sanima Bank Ltd</option>
                    <option value="Machhapuchhre Bank Ltd">Machhapuchhre Bank Ltd</option>
                       <option value="Nepal Bangladesh Bank Pvt. Ltd.">Nepal Bangladesh Bank Pvt. Ltd.</option>
                  </select>
                  @if($errors->has('Bank_name'))
                      <span class="text-danger">{{$errors->first('bank_name')}}</span>
                  @endif
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Receiver's A/C Number</label>
                  <input type="text" class="form-control" id="acc_no" name="acc_no" placeholder="Enter Account Number" value="{{old('acc_no')}}">
                  @if($errors->has('acc_no'))
                      <span class="text-danger">{{$errors->first('acc_no')}}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Receiver's A/C Name</label>
                  <input type="text" class="form-control" id="acc_name" name="acc_name" placeholder="Enter A/C Name" value="{{old('acc_name')}}">
                  @if($errors->has('acc_name'))
                      <span class="text-danger">{{$errors->first('acc_name')}}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label>Purpose</label>
                  <textarea class="form-control" name='purpose' rows="3" 
                  placeholder="Enter ..."></textarea>
                  <input type="hidden" name="transaction_type" id="transaction_type" value="Bank Transfer">
                </div>
              </div> 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Proceed</button>
              </div>
            </form>
          </div>

@endsection