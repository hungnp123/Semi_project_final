
<table class="table table-bordered">

<tr>

<th>No</th>

<th>Name</th>

<th>Details</th>

<th width="280px">Action</th>

</tr>

@foreach($category as $cate_id => $category)

<tr>

<td>{{$cate_id+1}}</td>

<td>{{ $category->name }}</td>

<td>{{ $category->description }}</td>

<td>

<form action="{{ route('category.destroy',$category->id) }}" method="POST">

<a class="btn btn-info" href="{{ route('category.show',$category->id) }}">Show</a>

<a class="btn btn-primary" href="{{ route('category.edit',$category->id) }}">Edit</a>

<a class="btn btn-primary" href="{{ route('category.destroy',$category->id) }}">Delete</a>

</form>

</td>

</tr>

@endforeach

</table>
