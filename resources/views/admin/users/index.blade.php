@extends('user.layout.master')
@section('content')
      <div class="contaimer mt -5">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4> User
                    <a href="{{url('add-user')}}" class="btn btn-primary btn-sm float-right">Add user </a>
                </h4>
                <div class="card-body">
                    <table class="table table-bordered">
    
                      <thead>
    
                           <tr>
                              <th>ID</th>
                              <th>username</th>                           
                              <th>fullname</th>
                              <th>password</th> 
                              <th>role</th>
                              <th>edit user</th>
                          </tr>
    
                    </thead>
                    <tbody >
                        @foreach($user as $item)
                        <tr>
                          <td>{{ $item->id}}</td>
                          <td>{{ $item->user_name }}</td>
                          <td>
                            {{ $item->full_name }}
                          </td>
                          <td>
                            {{ $item->password }}
                          </td>
                          <td>{{ $item->role}}</td>
                          
    
                          <td>
                                 <a href="{{ url ('edit-user/'.$item->id) }}" class="btn btn-success btn-sm">Edit</a>
                                 <a href="{{ url ('destroy-user/'.$item->id) }}" 
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