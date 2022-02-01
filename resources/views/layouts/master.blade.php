<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Online Banking System</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('layouts.styles')
 </head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('layouts.header')
  <aside class="main-sidebar">
   @include('layouts.sidebar')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
       <h1>
       @yield('headings')
        <small>@yield('small-headings')</small>
      </h1>
       <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">
    	
    		
    @yield('content')
    
    </section>
    <!-- /.content -->
  </div>
 @include('layouts.footer')

  <div class="control-sidebar-bg"></div>
</div>
@include('layouts.scripts')
@yield('page-script')
</body>
</html>
