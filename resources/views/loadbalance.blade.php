@extends('layouts.master')
@section('headings')
Load Balance
@endsection
@section('small-headings')
$$
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
              <h3 class="box-title">Load Balance</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
	<form action="{{route('account.deposit')}}" method="POST">
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
                  <label for="exampleInputEmail1">Choose Account</label>
                  <select class="form-control select2" name="account_id">
                   @foreach($accounts as $account)
                    <option value="{{$account->id}}">{{isset($account->users) ? $account->users->name : ''}}  {{$account->account_number}}</option>
                    @endforeach
                    
                  </select>
                  
                </div>
                 
                
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" name='description' rows="3" 
                  placeholder="Enter ..."></textarea>
                  <input type="hidden" name="deposit" id="deposit" value="Deposit">
                </div>
              </div> 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Proceed</button>
              </div>
            </form>
          </div>

@endsection