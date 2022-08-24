@extends('admin.layout.master')

@section('content')
    <body>
        <div class="categorybox">
            <h2>Category</h2>
            <hr width="60%" text-align="center">
                <li><a href="{{route('category.index')}}">Show Admin Infomation</a></li>
				<li><a href="{{route('category.create')}}">Create Admin</a></li>
        </div>
        <div class="productlist">
            <h2>Product</h2>
            <hr width="60%" text-align="center">
                <li><a href="{{route('product.index')}}">Show List Products</a></li>
				<li><a href="{{route('product.create')}}">Create New Prodct</a></li>
        </div>
        <div class="userbox">
            <h2>User</h2>
            <hr width="60%" text-align="center">
                <li><a href="{{route('index')}}">Show User Infomation</a></li>
				<li><a href="{{route('create')}}">Create User</a></li>
        </div>
        <div class="sliderbox">
            <h2>Slider</h2>
            <hr width="60%" text-align="center">
                <li><a href="{{route('slider.index')}}">Show User Infomation</a></li>
				<li><a href="{{route('slider.create')}}">Create Slider</a></li>
        </div>
    </body>
@endsection