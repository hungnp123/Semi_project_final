<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    .header{
        margin-top: 30px;
        margin-bottom: 30px;
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
        float: left;
        text-align: right;
        margin-top: 15px;
    }

    .banner {
        padding-top: 148px;
	}
    ul li:hover ul {display: block;}
	.carousel-inner .item img {
        margin: auto;
        width:100%;
        height:500px;
    }

    .menu{
        margin-top: 30px;
        background-color: #5F9EA0;
        width: 100%;
        height: 50px;
        padding-top: 10px;
		box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        float: left;
    }
    .menu ul li{
    	list-style: none;
        float: left;
    }
    .menu a{
        font-family: Courier;
    	color:white;
        padding-top: 10px;
        font-size: 16px;
        padding: 30px;
    }

    .cate_layout p{
        float: right;
    }
    .healing {
        font-family: Courier;
        text-align: center;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid;
    }
    tr, td {
        padding: 15px;
        text-align: left;
    }
    tr:hover {background-color: #66CDAA;}
    .footer{
        width: 100%;
        padding: 1rem;
    }
</style>
<body>
    <!-- header section starts  -->
        @include('admin.layout.head')
    <!-- header section ends -->

    <!-- menu section starts  -->
        @include('admin.layout.menubar')
    <!-- menu section ends -->

    <!-- banner section starts  -->
        @include('admin.layout.banner')
    <!-- banner section ends -->

    <div class = "content">
        @yield('content')
    </div>

    <!-- footer section starts  -->
    <div>
        @include('admin.layout.footer')
    </div>
    <!-- footer section ends -->
</body>
</html>