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
    .dropdown{
        width: 25%;
        height: auto;
        margin-top: 27px;
        float: left;
        margin-left:50px;
    }
    .center {
        width: 40%;
        height: auto;
        float: left;
        text-align: center;
        margin-top: 27px;
    }
    .right {
        width: 20%;
        height:auto;
        float: right;
        margin-top: 40px;
    }

</style>
<body>
<div class="head">
    <div class="dropdown" style="margin-left: 30px; font-size: 24px";>
		<a class="dropdown-toggle" data-toggle="dropdown"><img src="img/usericon.jpg" width="50px" height="50px"></a">
			<ul class="dropdown-menu">
				<li><a href="login">Login</a></li>
                <li><a href="signup">Sign Up</a></li>
				<li><a href="logout">Logout</a></li>
			</ul>
    </div>    
    <div class="center">                                                                                      
        <a href="homepage.php"><img src="img/weblogo.jpg" width="250px" height="68px"></a>
    </div>
    <div class="right"  id="form_search">
		<form class="form-inline ml-auto" data-background-color action="search.php">
			<input type="text" class="form-control" name="user_query" placeholder="Search a book" />
			<input type="submit" class="btn btn-success btn-round" name="Search" value="search" />
		</form>
	</div>
    </div>  
</div>    
</body>
</html>