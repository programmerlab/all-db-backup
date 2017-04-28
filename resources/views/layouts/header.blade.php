<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta chaRSet="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">
<title> 
    {{ isset($website_title->field_value)?$website_title->field_value:"ShoperSquare: India largest ecommerce company" }} 
</title>

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="{{ asset('public/enduser/assets/css/bootstrap.min.css') }}">

<!-- Customizable CSS -->
<link rel="stylesheet" href="{{ asset('public/enduser/assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('public/enduser/assets/css/blue.css') }}">
<link rel="stylesheet" href="{{ asset('public/enduser/assets/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('public/enduser/assets/css/owl.transitions.css') }}">
<link rel="stylesheet" href="{{ asset('public/enduser/assets/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/enduser/assets/css/rateit.css') }}">
<link rel="stylesheet" href="{{ asset('public/enduser/assets/css/bootstrap-select.min.css') }}">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="{{ asset('public/enduser/assets/css/font-awesome.css')}}">

<!-- Fonts -->
<!-- <link href='../../../../fonts.googleapis.com/css-family=Roboto-300,400,500,700.htm' rel='stylesheet' type='text/css'>
<link href='../../../../fonts.googleapis.com/css-family=Open+Sans-400,300,400italic,600,600italic,700,700italic,800.htm' rel='stylesheet' type='text/css'>
<link href='../../../../fonts.googleapis.com/css-family=Montserrat-400,700.htm' rel='stylesheet' type='text/css'>
 --><style type="text/css">
	.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(images/loader-64x/Preloader_2.gif) center no-repeat #fff;
}
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.se-pre-con.loader {
    margin: 0 auto; 
    left: 44.5%;
    top: 44.5%;
}

</style>
</head>
<body class="cnt-home">
<div class="se-pre-con loader"></div> 
 
