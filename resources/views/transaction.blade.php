@extends('layouts.master')
@section('headings')
Transaction
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
 @if(Session::has('error'))
  <div class="callout callout-danger" data-expires="1000">
        <h4>{{session('error')}}</h4>
    </div>
@endif
<div class="row">
<div class="col-md-12">

<div class="col-md-12">
	<div class="box">
            <div class="box-header">
              <h3 class="box-title">All Transaction</h3>
              			<a class="btn btn-primary btn-xs pull-right" href="#">Statement</a>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
           <table id="transactionlist" class="table table-bordered table-hover dataTable">
                <thead>
                <tr>
                	<th>Id</th>
                	<th>Amount</th>
                	<th>Transaction Type</th>
                	<th>Bank</th>
                	<th>Paid To</th>
                	<th>Account Number</th>
                  <th>Date</th>
                  <th>Purpose</th>
                </tr>
                </thead>
                <tbody>
    @foreach($transaction as $t)
			<tr>
				<td>{{$t->id}}</td>
				<td>{{$t->amount}}</td>
				<td>{{$t->transaction_type}}</td>
				<td>{{$t->to_bank}}</td>
				<td>{{$t->to_account_name}}</td>
				<td>{{$t->to_account_number}}</td>
        <td>{{$t->created_at}}</td>
				<td>{{$t->purpose}}</td>
 				
			</tr>

			@endforeach
			   
                     </tbody>
               
              </table>
          </div>
      </div>
  </div>
</div>

</div>
</div>
	@endsection
@section('page-script')
<!-- <script>
$(document).ready(function() {
    $("#userlist").DataTable();
} );
</script> -->
@endsection