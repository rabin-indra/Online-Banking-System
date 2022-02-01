@extends('layouts.master')
@section('headings')
User
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
<div class="row">
<div class="col-md-12">

<div class="col-md-12">
	<div class="box">
            <div class="box-header">
              <h3 class="box-title">User Data Table</h3>
              <a class="btn btn-primary btn-xs pull-right" href="{{route('add.user')}}">Add user</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
           <table id="userlist" class="table table-bordered table-hover dataTable">
			<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Gender</th>
				<th>DOB</th>
				<th>Phone</th>
				<th>Account number</th>
				
				<th>Status</th>
				<th>Action</th>
			</tr>
			</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->gender}}</td>
				<td>{{$user->dob}}</td>
			 <td>{{$user->phone_number}}</td> 
			 	<td>
			 	{{isset($user->account->account_number)  ? $user->account->account_number:"No account number assigned"}}</td> 
			 	
			 	<td>
			 		
			 	@if($user->account->status == 1)
			 		<span class="label label-success">Active</span>
			 		 
                        @else

                        <span class="label label-danger">Deactive</span>
                           
                        @endif  
                                
			 	</td>
			 	<td>
			 		<a href="{{route('user.profile',$user->id)}}" class="btn btn-primary btn-xs">
			 			<i class="fa fa-eye"></i>
			 		</a>
			 		<a class="btn btn-primary btn-xs" href="{{route('edit.user',$user->id)}}">
			 			<i class="fa fa-edit"></i>
			 		</a>
			 		
			 </td>
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
<script>
$(document).ready(function() {
    $("#userlist").DataTable();
} );
</script>
@endsection