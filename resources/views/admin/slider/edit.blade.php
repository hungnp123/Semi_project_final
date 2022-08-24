@extends('user.layout.master')
@section('content')
<div class="contaimer mt -5">
    <div class="row">
      <div class="col-md-12">
        @if (session ('status'))
            <h5 class="alert alert-success">{{session('status')}}</h5>
        @endif
        <div class="card">
          <div class="card-header">  
            <h4>Edit Slider
              <a href="{{ url('home-slider') }}" class="btn btn-danger btn-sm float-right">BACK </a>
            </h4>           
          </div>
          <div class="card-body">

            <form action="{{url('update-slider/'.$slider->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method ('PUT')
             

               <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" value="{{$slider->title}}" class="form-control">                
              </div>

              <div class="form-group">
                <label for="">description</label>
                <textarea  name="description" class="form-control">{{$slider->description}}</textarea>                
              </div>

               <div class="form-group">
                <label for="">Slider Upload Image:</label>
                <input type="file" name="image" class="form-control">   
                <img src="{{ asset('uploads/banner/'.$slider->image) }}" width="100px" alt ="Slider Image">             
              </div>

               <div class="form-group">
                <label for="">status</label>
                <input type="checkbox" name="status" {{$slider->status == '1' ? 'checked':''}}>  0=visible, 1=hidden                
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>            
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
</div>