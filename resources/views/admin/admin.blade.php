@extends('admin.layout.master')

@section('content')
    <body>
<div class="catelayout">
<h1>Category</h1>   
<p><a class="btn btn-Primary" href="{{ route('category.index') }}"> Show more </a></p>     
    <table>
    <tr class="thead" style="background-color: #008080; color: white;">
        <td>No</td>
        <td>Category Name</td>
        <td>Description </td>
    </tr>
    @foreach ($category as $categorys)
    <tr>
        <td>{{$categorys['cate_id']}}</td>
        <td>{{$categorys['cate_name']}}</td>
        <td>{{$categorys['cate_des']}}</td>
    </tr>
    @endforeach
    </table>
</div>
    </body>
@endsection