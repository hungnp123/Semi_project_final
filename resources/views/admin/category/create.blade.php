@extends('admin.layout.master')
@section('content')
<style>
    .new-pd {
        margin-left:450px;
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
        <br/>
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
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            <a class="btn btn-primary" href="{{ route('category.index') }}"> Back</a>
        </div>
    </div>
</form>
@endsection