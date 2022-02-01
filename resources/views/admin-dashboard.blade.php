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
            <span class="info-box-icon bg-aqua"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Account</span>
              <span class="info-box-number">{{$total_accounts}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-money"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Active Account</span>
              <span class="info-box-number">{{$active_accounts}}</span>
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
              <span class="info-box-text">Deactive Account</span>
              <span class="info-box-number">{{$deactive_accounts}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
          <div class="col-md-6">
            <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Transaction Amount By Accounts</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              <ul class="products-list product-list-in-box">
                @foreach($transactions as $transaction)
                <li class="item">
                
                  <div class="">
                    <a href="javascript:void(0)" class="product-title">{{$transaction->account->username}}
                      <span class="label label-success pull-right">NPR {{$transaction->total}}</span></a>
                    <span class="product-description">
                         {{$transaction->account->account_number}}
                        </span>
                  </div>
                </li>
                @endforeach
              
              </ul>
            </div>
            <!-- /.box-body -->
          
            <!-- /.box-footer -->
          </div>
          </div> 

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

       
        <!-- /.col -->
        <!-- <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-line-chart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"></span>
              <span class="info-box-number">Rs </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div> -->
        <!-- /.col -->
      </div>
 @endsection