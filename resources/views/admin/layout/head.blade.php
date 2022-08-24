<div class="header">
    <div class="profile" style="margin-left: 30px; font-size: 24px">
    <div class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown"><img src="/img/usericon.jpg" width="50px" height="50px"></a">
			<ul class="dropdown-menu">
				<li><a href="user/login">Login</a></li>
                <li><a href="user/signup">Sign Up</a></li>
				<li><a href="user/logout">Logout</a></li>
			</ul>
    </div>    
    </div>
    <div class="center">                                                                                      
        <a href="{{route('Homepage')}}"><img src="/img/weblogo.jpg" width="250px" height="68px"></a>
    </div>
    <div class="search">
		<form class="form-inline ml-auto" action="{{ route('product.search') }}" method="get">
			<input type="text" class="form-control" name="product_name" placeholder="Search a book" />
			<input type="submit" class="btn btn-success btn-round" name="Search" value="search" />
		</form>
	</div> 
</div>    