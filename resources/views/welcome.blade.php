<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Application</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

 

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand" href="#">#CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item active">
              <a class="nav-link" href="#"> Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#"> About</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </div>

    <div class="container">
        <div class="text-center p-5">
            <h2>All User's Form Database</h2>
        </div>

        <div class="clearfix mb-5">

            <div class="float-left"></div>
            <div class="float-right">   
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add
                  </button>
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditeUser">
                        Edite
                      </button>
                      || 
                    <button onclick="return confirm()" type="button" class="btn btn-danger">Delete</button> 
          
                </td>
              </tr>

              @endforeach
          
            </tbody>
          </table>
    </div>

    <!-- Modal  For Create -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create User Form </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

   

        <div class="modal-body">

            <form action="{{ url('adduser') }}" method="POST">
              @csrf

                <div class="form-group">
                  <label for="exampleInputEmail1">Frist Name </label>
                  <input name="fname" type="text" class="form-control @error('fname')is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name </label>
                    <input name="lname" type="text" class="form-control @error('lname')is-invalid @enderror " id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number </label>
                    <input name="phoneno" type="number" class="form-control @error('phoneno')is-invalid @enderror " id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Address </label>
                    <input name="address" type="text" class="form-control @error('address')is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted"></small>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                  </div>
                </form>

        </div>

      </div>
    </div>
  </div>
  <!-- Modal  For Create -->

      <!-- Modal  For Edite -->
<div class="modal fade" id="EditeUser" tabindex="-1" aria-labelledby="EditeUser" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update User Form </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Frist Name </label>
                  <input name="fname" type="text" class="form-control" id="exampleInputEmail1" value="Millat" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name </label>
                    <input name="lname" type="text" class="form-control" id="exampleInputEmail1" value="Hussain" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number </label>
                    <input name="phoneno" type="number" value="01853907553" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Address </label>
                    <input name="address" type="text" value="Mymensingh" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted"></small>
                  </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Update changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal  For Create -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>