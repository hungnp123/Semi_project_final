@extends('admin.layout.master')
@section('content')
<style>
    table {
        margin-left:300px;
        width: 60%;
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
</style>
<table>
<tr class="thead" style="background-color: #008080; color: white;">
        <td>No</td>
        <td>Product Name</td>
        <td>Product Picture</td>
        <td>Product Year</td>
        <td>Product Price</td>
        <td>Action</td>
    </tr>

@foreach ($product as $product)
    <tr>
        <td>{{$product['product_id']}}</td>
        <td>{{$product['product_name']}}</td>
        <td><img src="{{ asset('img/' . $product->product_img) }}" width="80px", height="120px"/><td>
        {{$product['product_year']}}</td>
        <td>{{$product['product_price']}}</td>
        <td>
            <a class="btn btn-Primary" href="{{ route('product.create') }}"> Create </a>
            <p><a class="btn btn-success btn-round" href='detail.php'>Details</a><p> 
            <p><a class="btn btn-danger" href="{{ route('product.delete',$product->product_id) }}">Delete</a><p>      
            <p><a class="btn btn-primary" href="{{ route('product.edit',$product->product_id) }}">Edit</a><p>      
        </td>        
    </tr>
@endforeach
</table>    
@endsection
