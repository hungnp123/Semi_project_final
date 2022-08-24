@extends('admin.layout.master')
@section('content')
<style>
    table {
        width: 100%;
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
        <td>Category Name</td>
        <td>Description </td>
        <td>Action</td>
    </tr>

    @foreach ($category as $category)
    <tr>
        <td>{{$category['cate_id']}}</td>
        <td>{{$category['cate_name']}}</td>
        <td>{{$category['cate_des']}}</td>
        <td>
            <p><a class="btn btn-Primary" href="{{ route('category.create') }}"> Create </a></p>
            <p><a class="btn btn-danger" href="{{ route('category.destroy',$category->cate_id) }}"> Delete </a></p>     
            <p><a class="btn btn-success" href="{{ route('category.edit',$category->cate_id) }}"> Edit </a></p>
        </td>        
    </tr>
    @endforeach

</table>
</body>
@endsection
