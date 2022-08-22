<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    .add-product {
        padding:30px;
        height:500px;
        width: auto;
    	border-radius: 4%;
    	box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
 		background: white;
    }
    .row h2{
        text-align: center;
    }    
</style>    
<div class="row">
    <div class="col-lg-12 margin-tb">
            <h2>Add New Product</h2>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
        </div>
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
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </div>

    </div>
</form>    