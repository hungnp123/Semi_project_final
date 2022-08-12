<style>
    .product-box {
        margin-bottom: 30px;
    	height: auto;
    	width: auto;
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
        <p>{{$product ['category cate_name']}}</p>
        <p><img src="{{ asset('img/' . $product->product_img) }}" /><p>
        <strong>Price: {{$product ['product_price']}}</strong>
        <a class="btn btn-success btn-round" href='detail.php'>Details</a>  
    </div>
</div>    
@endforeach
