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
              			<a class="btn btn-primary btn-xs pull-right" href="{{route('add.person')}}">Add User</a>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
           <table id="userlist" class="table table-bordered table-hover dataTable">
                <thead>
                <tr>
                	<th >Id</th>
                	<th >Name</th>
                	<th >Email</th>
                	<th>Gender</th>
                	<th>DOB</th>
                	<th>Phone Number</th>
                  	<th>Address</th>
                    <th>Status</th>
                	<th>Action</th>
                </tr>
                </thead>
                <tbody>
    @foreach($user as $p)
			<tr>
				<td>{{$p->id}}</td>
				<td>{{$p->name}}</td>
				<td>{{$p->email}}</td>
				<td>{{$p->gender}}</td>
				<td>{{$p->dob}}</td>
				<td>{{$p->num}}</td>
				<td>{{$p->address}}</td>
 				<!-- <td>@if($p->gender == 1)Male @else Female @endif</td> --> 
        <td>{{$p->address}}</td>
				<td><a class="btn btn-primary btn-xs" href="{{route('edit.person',$p->id)}}"><i class="fa fa-edit"></i></a>
          <a class="btn btn-danger btn-xs"  href="{{route('delete.user',$p->id)}}"><i class="fa fa-trash"></i></a>
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