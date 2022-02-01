@extends('layouts.master')
@section('headings')
User
@endsection
@section('small-headings')
Profile
@endsection
@section('content')
@if(Session::has('message'))
div class="callout callout-success" data-expires="1000">
        <h4>{{session('message')}}</h4>
        </div>
        @endif
<div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <!-- <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture"> -->

              <h3 class="profile-username text-center">{{$users->name}}</h3>

              <p class="text-muted text-center">{{$users->email}}</p>
              <p class="text-muted text-center">Account Number: {{$users->account->account_number}}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Balance</b> <a class="pull-right">{{$balance}}</a>
                </li>
                <li class="list-group-item">
                  <b>Date Of Birth</b> <a class="pull-right">{{$users->dob}}</a>
                </li>
                <li class="list-group-item">
                  <b>Gender</b> <a class="pull-right">{{$users->gender}}</a>
                </li>
                <li class="list-group-item">
                  <b>Phone</b> <a class="pull-right">{{$users->phone_number}}</a>
                </li>
                <li class="list-group-item">
                  <b>Address</b> <a class="pull-right">{{$users->address}}</a>
                </li>
                 <li class="list-group-item">
                  <b>Interest</b> <a class="pull-right">Rs {{$interest}}</a>
                </li>
              </ul>

             <!--  <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

         
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Activity</a></li>
              
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="activity">

              <form action="{{route('user.profile',$users->id)}}" method="get">
          {{csrf_field()}}
        <div class="form-group col-md-4">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <label for="exampleInputEmail1">From</label>
            <input type="Date" class="form-control" name="from" id="from" placeholder="" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
            @if ($errors->has('from'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('from') }}</strong>
            </span>
            @endif
          </div>
        </div>

        <div class="form-group col-md-4">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <label for="exampleInputEmail1">To</label>
            <input type="Date" class="form-control" name="to" id="to" placeholder="" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
            @if ($errors->has('to'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('to') }}</strong>
            </span>
            @endif
          </div>
          <!-- /.input group -->
        </div>
        <div class="form-group col-md-4">
          <button type="submit" class="btn btn-primary">Search</button>
        </div>
     </form>

                <table id="userlist" class="table table-bordered table-hover dataTable">
            <thead>
              <tr>
                <th >Id</th>
                <th >Date</th>
                <th >Description</th>
                <th>Balance</th>
              </tr>
            </thead>
            <tbody>
              @if(!empty($statements))
              @foreach($statements as $statement)
                <tr class= "{{($statement->balance > 0) ? 'text-green': 'text-red'}}">
                  <td>{{$statement->id}}</td>
                  <td>{{$statement->created_at}}</td>
                  <td>{{$statement->description}}</td>
                  <td>{{$statement->balance}}</td>
                </tr>
                @endforeach
                @else
                <tr>
                  <td colspan="4" >Please enter dates to view statements</td>
                </tr>
                @endif

            </tbody>

          </table>
                <!-- Post -->
                <!-- <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">{{$users->name}}</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">test</span>
                  </div>
                </div> -->
              </div>
            </div>
@endsection