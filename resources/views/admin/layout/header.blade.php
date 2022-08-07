<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.header{
		box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    }
    .header ul li{
    	list-style: none;
		padding: 20px;
		margin-top: 12px;
		margin-bottom: 12px;
    }
    .header img{
    	float:left;
		margin-top: 20px;
		margin-bottom: 20px;
    }
	.carousel-inner .item img {
        margin: auto;
        width:100%;
        height:500px;
    }
</style>
<body>
    <div class="header">
    <nav class="navbar navbar-expand-lg bg-success" role="navigation">
		<div class="collapse navbar-collapse" id="myNavbar">
		<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<a href="homepage.php"><img src="img/weblogo.jpg" width="200px" height="55px"></a>
				<li><a href="homepage.php"><span class=" glyphicon glyphicon-home"> Home</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> Category<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="login">Login</a></li>
								<li><a href="signup">Sign Up</a></li>
								<li><a href="cart.php">Team management</a></li>
							</ul>
					</li>
					<li><a href="managesong.php"><span class=" glyphicon glyphicon-music"> Match</a></li>
					<li><a href="introduction.php"><span class=" glyphicon glyphicon-bookmark"> News</a></li>
			</ul>
		</div>			
				<ul class="nav navbar-nav navbar-right">
					<div style="margin-top: 27px;" id="form_search">
						<form class="form-inline ml-auto" data-background-color action="search.php">
							<input type="text" class="form-control" name="user_query" placeholder="Search a music" />
							<input type="submit" class="btn btn-success btn-round" name="Search" value="search" />
						</form>
					</div>	
				</ul>
	
		</div>
    </nav>
	</div>    
</body>    
</html>