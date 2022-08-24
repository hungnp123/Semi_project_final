@extends('admin.layout.master')   
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
            <h2>Add New Product</h2>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="add-product">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <strong>ID:</strong> 
                <input type="text" name="product_id" class="form-control" placeholder="ID">
            </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="product_name" class="form-control" placeholder="Name">
            </div>        
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="product_price" class="form-control" placeholder="Price">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Author:</strong>
                <select name="product_author" class="form-control">
                    @foreach($author as $author)
                        <option value="{{$author->author_id}}">{{$author->author_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" class="form-control" placeholder="Image" value="" name="product_img" />
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Public Year:</strong>
                <input type="number" name="product_year" class="form-control" placeholder="Year">
            </div>        
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Category:</strong>
                <select name="product_cate" class="form-control">
                    @foreach($category as $categories)
                        <option value="{{$categories->cate_id}}">{{$categories->cate_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
        </div>

    </div>
</form>    
@endsection