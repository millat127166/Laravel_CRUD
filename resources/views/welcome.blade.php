@extends('layout.main')

@section('crudtitle')

All User's Form Database
    
@endsection

@section('section')

<div class="container">
  <div class="text-center p-5">
      <h2>@yield('crudtitle')</h2>
  </div>

  <div class="clearfix mb-5">

      <div class="float-left"></div>
      <div class="float-right">   
          <a href="create" type="button" class="btn btn-primary">
              Add
          </a>
      </div>
    </div>
    @if (session('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session('success') }}</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
        
    @endif
  <table class="table table-bordered text-center">
      <thead>
        <tr>
          <th scope="col">#Serial No </th>
          <th scope="col">First Name </th>
          <th scope="col">Last Name </th>
          <th scope="col">Phone Number</th>
          <th scope="col">Address</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $item)
            
     
        <tr>
         
          <td>{{ $item->id }}</td>
          <td>{{ $item->fname }}</td>
          <td>{{ $item->lname }}</td>
          <td>{{ $item->phoneno }}</td>
          <td>{{ $item->address }}</td>
      
        
          <td>

   
  
             <a class="btn btn-primary btn-sm" href="{{ url('edite/'.$item->id ) }}"> 
                Edite
             </a>

        
                || 

              <form method="POST" action=" {{ url('delete/' . $item->id) }} ">
                @csrf
                @method('DELETE')
                
            <button onclick="return confirm()" type="submit" class="btn btn-danger btn-sm">Delete</button> 

          </form>
          </td>
        </tr>

        @endforeach
    
      </tbody>
    </table>
</div>
    
@endsection

