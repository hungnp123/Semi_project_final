<div class = "header">
@include('admin.layout.header')
</div>
<div class = "banner">
@include('admin.layout.banner')
</div>
<style type="text/css">
   .pull_lefft{
        float: left;
        width: 20%;
        height: auto;
        background-color:white;
        list-style-type: none;
    }
    .pull_lefft ul.li{
        margin-left: 20px;
    }
   .pull_right{
        float: right;
        width: 80%;
        height: auto;
        list-style-type: none;
   }
</style>   
<body>
<div class="wrapper">
    <div class="pull_lefft">
        <hr height: 80%>
        <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-bookmark"> Category<span class="caret"></span></a>
				<ul class="dropdown-menu">
				    <li><a href="{{ route('category.index') }}">Show category</a></li>
					<li><a href="{{ route('category.create')}}">Create category</a></li>
				</ul>
		</li>
        <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-bookmark"> Category<span class="caret"></span></a>
				<ul class="dropdown-menu">
<<<<<<< Updated upstream
                @foreach ($category ?? '' as $data)
=======
>>>>>>> Stashed changes
				    <li><a href="{{ route('category.index') }}">Show category</a></li>
					<li><a href="{{ route('category.create')}}">Create category</a></li>
				</ul>
		</li>
        <hr width: 80%>
        <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-book">Product<span class="caret"></span></a>
				<ul class="dropdown-menu">
				    <li><a href="{{ route('product.index') }}">Product Index</a></li>
					<li><a href="{{ route('product.create')}}">Create product</a></li>
				</ul>
		</li>
    </div>
    <div class="pull_right">
        <li><a href="{{ route('category.index') }}">Show category</a></li>
    </div>
</div>
<div class="footer">
@include('admin.layout.footer')
</div>
</body>