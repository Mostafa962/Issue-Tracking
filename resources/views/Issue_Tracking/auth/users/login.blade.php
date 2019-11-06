<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('/')}}/frontend_plugins/css/bootstrap/bootstrap.min.css">
    <!-- Font awesome -->
  <link rel="stylesheet" href="{{url('/')}}/frontend_plugins/css/font-awesome/css/fontawesome.min.csss">
  <!-- main css -->
  <link rel="stylesheet" href="{{url('/')}}/frontend_plugins/css/main.css">
  <!-- Font Awesome -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box" style="padding: 80px;">
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your jobs as user |<a href="{{route('admin.home')}}" target="_blank"><b> admin ?</a></p>
    <div class="form-login">
    <form action="{{route('login')}}" method="post" id="login-form-user">
      @csrf
      <div class="row">
      	<div class="col-md-12">
        @include('Issue_Tracking.layout.messages')
      	</div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="rememberme"> Remember Me
            </label>
          </div>
        </div>
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
      </div>
    </form>
  </div>
  </div>
</div>
<!-- jQuery 3 -->
<script src="{{url('/')}}/frontend_plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('/')}}/frontend_plugins/bootstrap/bootstrap.min.js"></script>
<script>
</script>
</body>
</html>
