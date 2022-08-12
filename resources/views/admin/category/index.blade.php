<style>
    table {
        width: 60%;
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
    </tr>

    @foreach ($category as $category)
    <tr>
        <td>{{$category['cate_id']}}</td>
        <td>{{$category['cate_name']}}</td>
        <td>{{$category['cate_des']}}</td>
    </tr>
    @endforeach

</table>
</body>
