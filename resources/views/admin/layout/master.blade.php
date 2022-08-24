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

    .body{
        
    }
    .healing {
        font-family: Courier;
        text-align: center;
    }
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