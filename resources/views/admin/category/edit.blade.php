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
    <div class="alert alert-danger">
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
    </div>
    <form action="/category/update/{{ $category->cate_id }}" method="post">
        @csrf
        <label for="Name:">
            Name:
            <input type="text" name="cate_name" value="{{ $category->cate_name }}">
        </label><br><br>
        <label for="Description":>
            Description:
        <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $category->description }}</textarea>
        </label><br><br>
        <button type="submit">Edit user</button>
    </form>