<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Category</h2>
        </div>
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
    <form action="{{ route('category.update',$category->cate_id) }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="update-cate">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="cate_name" class="form-control" placeholder="Name" value="{{ $category->cate_name }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="cate_des" placeholder="Description">{{ $category->cat_des }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>    
    </div>