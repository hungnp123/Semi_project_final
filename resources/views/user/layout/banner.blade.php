<!-- <html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    .carousel-inner .item img {
        width:100%;
        height:100%;
    }
	.banner {
		margin-top: 80px;
	}
</style> -->
<body>
    <div class="banner">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    		<ol class="carousel-indicators">
      			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      			<li data-target="#myCarousel" data-slide-to="1"></li>
      			<li data-target="#myCarousel" data-slide-to="2"></li>
   		    </ol>
        <div class="carousel-inner" role="listbox">
      		<div class="item active">
        		<img src="img/banner1.jpg"  alt="banner 1">    
      		</div>
     		<div class="item">
                <img src="img/banner2.jpg"  alt="banner 2">
      		</div>
      		<div class="item">
        		<img src="img/banner3.jpg" alt="banner 3">
      		</div>
    	</div>
    		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
 				<span class="sr-only">Previous</span>
    		</a>
    		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
    		</a>
    </div>
<!-- </body>    
</html> -->