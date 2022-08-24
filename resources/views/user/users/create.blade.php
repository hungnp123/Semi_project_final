<div class = "header">
    @include('admin.layout.header')
    </div>
    <div class = "banner">
    @include('admin.layout.banner')    
    </div>
    <div class = "menubar">
    @include('admin.layout.menubar')
    
    <div class="contaimer mt -5">
        <div class="row">
          <div class="col-md-12">
            @if (session ('status'))
                <h5 class="alert alert-success">{{session('status')}}</h5>
            @endif
            <div class="card">
              <div class="card-header">  
                <h4>Add User
                  <a href="{{url('home-user')}}" class="btn btn-danger btn-sm float-right">BACK </a>
                </h4>           
              </div>
              <div class="card-body">
    
                <form action="{{url('store-user')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="">user_name</label>
                    <textarea  name="user_name" class="form-control"></textarea>                
                  </div>
    
                   <div class="form-group">
                    <label for="">full_name</label>
                    <input type="text" name="full_name" class="form-control">                
                  </div>
    
                  <div class="form-group">
                    <label for="">password</label>
                    <input type="text" name="password" class="form-control">                
                  </div>
                  <div class="form-group">
                    <label for="">role</label>
                    <input type="text" name="role" class="form-control">                
                  </div>
    
                   <div class="form-group">
                    <label for="">status</label>
                    <input type="checkbox" name="status" >0=visible,1=hidden                
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
      @include('admin.layout.footer')
      </div>