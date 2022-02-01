<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OBS | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('public/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('public/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/dist/css/AdminLTE.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('public/plugins/iCheck/square/blue.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index2.html"><b>Online</b>Banking System</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="form-group has-feedback">
        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Enter Fullname" required autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        @if ($errors->has('name'))
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('name') }}</strong>
                       </span>
       @endif
      </div>
      <div class="form-group has-feedback">
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Enter Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
          @endif
      </div>
      <div class="form-group has-feedback">
       <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Enter Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
         @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
      </div>
      <div class="form-group has-feedback">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
            <div class="form-group has-feedback">
                  <select class="form-control select2" name="acc_type" id="acc_type">
                    <option value="">Choose Account Type</option>
                    <option value="saving">Saving</option>
                    <option value="current">Current</option>
                  </select>
                  @if($errors->has('acc_type'))
                    <span class="text-danger">{{$errors->first('acc_type')}}</span>
                  @endif
            </div>
           <div class="form-group has-feedback">
        
          <select class="form-control select2" name="gender" id="gender">
              <option value="">Choose Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
          </select>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        @if ($errors->has('gender'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('gender') }}</strong>
                        </span>
          @endif
      </div> 
        <div class="form-group has-feedback">
        <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" placeholder="Enter Phonenumber" required autofocus>
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
        @if ($errors->has('phone'))
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('phone') }}</strong>
                       </span>
       @endif
      </div>
      <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" name="dob" id="dob" placeholder="Enter DOB as dd/mm/yyyy" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                  @if ($errors->has('dob'))
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('dob') }}</strong>
                       </span>
                  @endif
                </div>
                <!-- /.input group -->
              </div>
              <!-- <div class="form-group has-feedback">
        <input id="acc_num" type="text" class="form-control{{ $errors->has('acc_num') ? ' is-invalid' : '' }}" name="acc_num" value="{{ old('acc_num') }}" placeholder="Enter Account Number" required autofocus>
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
        @if ($errors->has('acc_num'))
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('acc_num') }}</strong>
                       </span>
       @endif
      </div> -->
      <div class="form-group has-feedback">
        <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" placeholder="Enter Address" required autofocus>
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
        @if ($errors->has('address'))
                       <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('address') }}</strong>
                       </span>
       @endif
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    < --><!-- /div> -->

    <a href="{{route('login')}}" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="{{asset('public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $("#dob").datepicker();
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
     
        
 

  });
</script>
</body>
</html>
