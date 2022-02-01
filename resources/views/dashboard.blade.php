@extends('layouts.master')
@section('headings')
Dashbord
@endsection
@section('small-headings')
Details
@endsection
@section('content')
@if(Session::has('message'))
  <div class="callout callout-success" data-expires="1000">
        <h4>{{session('message')}}</h4>
    </div>
@endif
<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-money"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Balance</span>
              <span class="info-box-number">NPR {{$balance}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-amazon"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Account Type</span>
              <span class="info-box-number">{{$user->account->account_type}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-money"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Currenry</span>
              <span class="info-box-number">NRs</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-line-chart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Interest</span>
              <span class="info-box-number">Rs {{$interest}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
 @endsection