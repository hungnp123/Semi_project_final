<div class = "header">
@include('admin.layout.header')
</div>
<div class = "banner">
@include('admin.layout.banner')    
</div>
<div class = "menubar">
@include('admin.layout.menubar')
</div>
<body>
<div class = "content">
    <div class="product">
        <br>
        <h1 class= "healing"> New Books</h1>
        <hr width="60%">
        <p class="text-muted">We have all book you want, check it out.</p>
        <br>
        @foreach ($product as $products)
            <div class="single-product">
                <div class="product-box">
                    <h4>{{$products ['product_name']}}</h4>
                    <hr width="200px"> 
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <p><img src="{{ asset('img/' . $products->product_img) }}" /><p>
                            </div>
                            <div class="flip-box-back">
                                <br>
                                <strong>Description: </strong>{{$products ['description']}} 
                            </div>
                        </div>
                    </div>         
                    <strong>Price: {{$products ['product_price']}}</strong>
                    <a class="btn btn-success btn-round" href='detail.php'>Details</a>  
                </div>
            </div> 
        @endforeach      
    </div> 
</div>
<div class="pagination"> {{ $product -> links() }} </div> 
</body>
<div class = "footer"> 
@include('admin.layout.footer')
</div>