<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>User | Area</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('/')}}/frontend_plugins/css/bootstrap/bootstrap.min.css">
 <!-- Font awesome -->
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/solid.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/fontawesome.min.css">
  <link rel="stylesheet" href="{{url('/')}}/frontend_plugins/css/font-awesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="{{url('/')}}/frontend_plugins/css/font-awesome/css/font-awesome.css">

  <!-- datatables -->
  <link rel="stylesheet" href="{{url('/')}}/frontend_plugins/css/datatables/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="{{url('/')}}/frontend_plugins/css/datatables/buttons.dataTables.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{url('/')}}/frontend_plugins/select2/dist/css/select2.min.css">
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
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                    <h1><a href="">Admin</a></h1>
                </div>
            </div>

            <div class="col-md-2 pull-right">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="{{url('/')}}" class="dropdown-toggle" data-toggle="dropdown">My Site <b
                                            class="caret"></b></a>
                                <ul class="dropdown-menu animated fadeInUp">
                                    <li><a href="{{url('/')}}">Front End</a></li>
                                    <li><a href="{{route('logout')}}">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</div>