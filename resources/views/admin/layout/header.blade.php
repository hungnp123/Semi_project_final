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
        margin-top: 30px;
        background-color: #8FBC8F;
    }
    .profile{
        width: 30%;
        height: auto;
        float: left;
        margin-top:10px;
    }
    .center {
        width: 30%;
        height: auto;
        float: left;
        margin-left:120px;
    }
    .search {
        width: 30%;
        height:auto;
        float: right;
        text-align: right;
        margin-top: 15px;
    }
	.banner {
		padding-top: 50px;
	}
    .menu{
        width: 100%;
		box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    }
    .menu ul li{
    	list-style: none;
		margin: 12px;
        margin-top: 30px;
        margin-bottom: 30px;
    }
    ul li:hover ul {display: block;}
	.carousel-inner .item img {
        margin: auto;
        width:100%;
        height:500px;
    }
    .product{
        width:100% ;
    }
    .healing {
        font-family: Courier;
        text-align: center;
    }
    .product p{
        font-family: Courier;
        text-align: center;
        font-size: 16px;
    }
    .product-box {
        margin-bottom: 25px;
        margin-top:25px;
    	height: auto;
    	width: 310px;
        padding-top: 10px;
        padding-bottom:10px;
        padding-left: 30px;
        padding-right: 30px;
    	border-radius: 3%;
    	margin-left: 30px;
    	margin-right: 30px;
    	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.16), 0 5px 10px rgba(0, 0, 0, 0.23);
 		background: #5F9EA0;
    }
    .single-product{
        font-size: 16px;
        float:left;
		text-align: center;
		width: auto;
		height: auto;
		margin: auto;
	}
    .product-box img {
        width: 250px;
        height: 370px;
    }
    .flip-box {
        background-color: transparent;
        width: auto;
        height: auto;
    }
    .flip-box-inner {
        position: relative;
        width: 250px;
        height: 370px;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
    }
    .flip-box:hover .flip-box-inner {
        transform: rotateY(180deg);
    }
    .flip-box-front, .flip-box-back {
        position: absolute;
        width: 250px;
        height: 370px;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }
    .flip-box-back {
        font-size:15px;
        transform: rotateY(180deg);
    } 
    .pagination{
        
        color: black;
        text-decoration: none;
        background-color: white;
        color: black;
        border: 3px solid green;
        padding: 15px;
        margin-left: 44%;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }    
    .footer{
        width: 100%;
        padding: 1rem;
    }
</style>
<body>
<div class="header">
    <div class="profile" style="margin-left: 30px; font-size: 24px">
    <div class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown"><img src="img/usericon.jpg" width="50px" height="50px"></a">
			<ul class="dropdown-menu">
				<li><a href="login">Login</a></li>
                <li><a href="signup">Sign Up</a></li>
				<li><a href="logout">Logout</a></li>
			</ul>
    </div>    
    </div>
    <div class="center">                                                                                      
        <a href="homepage.php"><img src="img/weblogo.jpg" width="250px" height="68px"></a>
    </div>
    <div class="search"  id="form_search" width>
		<form class="form-inline ml-auto" data-background-color action="search.php">
			<input type="text" class="form-control" name="user_query" placeholder="Search a book" />
			<input type="submit" class="btn btn-success btn-round" name="Search" value="search" />
		</form>
	</div> 
</div>    
<!-- </body>
</html> -->