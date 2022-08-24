@extends('user.layout.master')


 @section('content')

  <div class="contaimer mt -5">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4> Slider
                <a href="{{url('add-slider')}}" class="btn btn-primary btn-sm float-right">Add Slider </a>
            </h4>
            <div class="card-body">
                <table class="table table-bordered">

                  <thead>

                       <tr>
                          <th>ID</th>
                          <th>Title</th>                           
                          <th>Image</th>
                          <th>Status</th> 
                          <th>Edit Sliders</th>
                          
                      </tr>

                </thead>
                <tbody >
                    @foreach($slider as $item)
                    <tr>
                      <td>{{ $item->id}}</td>
                      <td>{{ $item->title }}</td>
                      <td>
                          <img src="{{asset('uploads/banner/'.$item->image)}}" width="100px" alt ="Slider Image">
                      </td>
                      
                      <td>
                        @if ($item->status == '1')
                          hidden
                        @else
                          visible
                        @endif
                      </td>

                      <td>
                             <a href="{{ url ('edit-slider/'.$item->id) }}" class="btn btn-success btn-sm">Edit</a>
                             <a href="{{ url ('destroy-slider/'.$item->id) }}" 
                             onclick="return confirm('are you sure?');"
                             
                             
                             class="btn btn-danger btn-sm">delete</a>                                  
                      </td>
                      
                      
                    </tr>
                    @endforeach

                </tbody>
                </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
</div>