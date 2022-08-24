@extends('user.layout.master')
@section('content')
<section id="detail" class="detail">

    <h1 class= "healing"> Books Details</h1>
        <hr width="60%">
    <div class="detailbox">
       <div class="row">
            <div class="col-md-4">
                <img src="{{asset('img/'.$products->product_img)}}">
            </div> 
            <div class="col-md-8">
                <h4 style="color: white; font-family:'Courier"><span>Price: {{$products->product_price}}</span></h4>
                <h1 style="color: white; font-family:'Courier">Name: {{$products->product_name}}</h2>
                <hr width="60%">
                <h4 style="color: white; font-family:'Courier"class="mt-3">Plot: {{$products->description}}</h4>
            </div>
       </div>
    </div>   
</section>
@endsection