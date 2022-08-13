<div class = "header">
@include('admin.layout.header')
</div>
<div class = "banner">
@include('admin.layout.banner')    
</div>
<div class = "menubar">
@include('admin.layout.menubar')
</div>
<div class = "content">
    <div class="product">
        <br>
        <h1 class= "healing"> New Books</h1>
        <hr width="60%">
        <p class="text-muted">We have all book you want, check it out.</p>
        <br>
        @foreach ($product as $product)
            <div class="single-product">
                <div class="product-box">
                    <h4>{{$product ['product_name']}}</h4>
                    <hr width="200px"> 
                    <p><img src="{{ asset('img/' . $product->product_img) }}" /><p>
                    <strong>Price: {{$product ['product_price']}}</strong>
                    <a class="btn btn-success btn-round" href='detail.php'>Details</a>  
                </div>
            </div> 
        @endforeach       
    </div>  
</div>
<div class = "footer"> 
@include('admin.layout.footer')
</div>