@extends('admin.layout.master')
@section('content')
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
        
        <div class="panel panel-success">
            <div class="panel-heading"><h1>Edit Category</h1></div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input!
                    <br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('category.update',$category->cate_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">    
                                <strong>Name:</strong>
                                <input type="text" name="cate_name" class="form-control" placeholder="Name" value="{{ $category->cate_name }}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Description:</strong>
                                <textarea class="form-control" style="height:150px" name="cate_des" placeholder="Description">{{ $category->cate_des }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <a class="btn btn-primary" href="{{ route('category.index') }}"> Back</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection