<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Laravel SB Admin 2">
    <meta name="author" content="Alejandro RH">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon" type="image/png">
</head>
<body>

<!-- Page Wrapper -->
<div class="wrapper">
    <div class="pull_right">

    </div>
    <div style="with: 30%; backgound-color: white" class="pull_lefft">
        <li><img src="img/adminlogo.jpg" width:240px; height:126px; text-align: center;>
        <hr width: 80%, color: white>
        <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-bookmark"> Category<span class="caret"></span></a>
				<ul class="dropdown-menu">
                @foreach ($category ?? '' as $data)
				    <li><a href="{{ route('category.index') }}">Show category</a></li>
					<li><a href="{{ route('category.create')}}">Create category</a></li>
					<li><a href="{{ route('category.edit',$data -> cate_id)  }}">Edit category</a></li>
                @endforeach
				</ul>
		</li>
        <hr width: 80%, color: white>
        <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-bookmark">Product<span class="caret"></span></a>
				<ul class="dropdown-menu">
                @foreach ($product as $data)
				    <li><a href="{{ route('product.index') }}">Product Index</a></li>
					<li><a href="{{ route('category.create')}}">Create product</a></li>
					<li><a href="{{ route('product.edit',$data -> product_id) }}">Edit product</a></li>
                @endforeach    
				</ul>
		</li>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>
</html>