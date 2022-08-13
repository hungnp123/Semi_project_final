<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    .product-box {
        margin-bottom: 30px;
    	height: 670px;
    	width: 360px;
        padding-top: 10px;
        padding-bottom:10px;
        padding-left: 30px;
        padding-right: 30px;
    	border-radius: 4%;
    	margin-left: 15px;
    	margin-right: 15px;
    	box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
 		background: #376E6F;
    }
    .single-product{
        float:left;
		text-align: center;
		width: auto;
		height: auto;
		margin: auto;
	}
    img {
        width: 300px;
        height: 450px;
    }
</style>
@foreach ($product as $product)
<div class="single-product">
    <div class="product-box">
        <h3>{{$product ['product_name']}}</h3>
        <hr width="200px"> 
        <p><img src="{{ asset('img/' . $product->product_img) }}" /><p>
        <strong>Price: {{$product ['product_price']}}</strong>
        <p><a class="btn btn-success btn-round" href='detail.php'>Details</a><p>  
    </div>
</div>    
@endforeach
