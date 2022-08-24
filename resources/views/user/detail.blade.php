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
                <h4><span>{{$products->product_price}}</span></h4>
                <h2 class="mb-0">{{$products->product_name}}</h2>
                <hr width="60%">
                <h4 class="mt-3">{{$products->description}}</h4>


            </div>
       </div>
    </div>   
</section>
@endsection