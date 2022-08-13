<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    .new-pd {
        padding:30px;
        height:400px;
        width: 40%;
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
        <h2>Add New Category</h2>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('category.index') }}"> Back</a>
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

<form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="new-pd">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>ID:</strong> 
                <input type="text" name="cate_id" class="form-control" placeholder="ID">
            </div>            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Name:</strong> 
                <input type="text" name="cate_name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="cate_des" placeholder="Description"></textarea>   
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </div>
</form>