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
        <h1 class= "healing">Search Result</h1>
        @if($products->isNotEmpty())
        @foreach ($products as $productss)
            <div class="single-product">
                <div class="product-box">
                    <h4 style="color: #FFFAFA;">{{$productss ['product_name']}}</h4>
                    <hr width="200px"> 
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <p><img src="{{ asset('img/' . $productss->product_img) }}" /><p>
                            </div>
                            <div style="text-align: justify;" class="flip-box-back">
                                <br>
                                <strong>Description: </strong>{{$productss ['description']}} 
                            </div>
                        </div>
                    </div>        
                    <strong>Price: {{$productss ['product_price']}}</strong>
                    <br>
                    <a class="btn btn-success btn-round" href='detail.php'>Details</a>  
                </div>
            </div> 
        @endforeach 
        @else
        <h1 class= "healing">Search Result</h1>
        @endif
    </div> 
</div>
<div class="pagination"> {{ $product -> links() }} </div> 
</body>
<div class = "footer"> 
@include('admin.layout.footer')
</div>