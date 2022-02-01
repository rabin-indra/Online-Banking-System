@extends('layouts.master')
@section('headings')
Statement
@endsection
@section('small-headings')
list
@endsection
@section('content')
@if(Session::has('message'))
<div class="callout callout-success" data-expires="1000">
  <h4>{{session('message')}}</h4>
</div>
@endif

<style>
</style>
   <div class="row">
  <div class="col-md-12">

   <div class="box">
    <div class="box-header">
      <h3 class="box-title">Statements</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="col-md-12">
        <form action="{{route('view.statement')}}" method="get">
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
        </div>

      </div>
    </div>

  </div>

@endsection
@section('page-script')
<script>
 
</script>
@endsection