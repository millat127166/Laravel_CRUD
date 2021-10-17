@extends('layout.main')
@section('section')
<div">
<div class="modal-dialog">
   <div class="modal-content">
      <div class="modal-header">
         <h5 class="modal-title">Update User Form </h5>
      </div>
    
      <div class="modal-body">
         
         <form action="{{ url('update') }}/{{ $data->id }}" method="POST">
            @csrf
            <div class="form-group">
               <label for="exampleInputEmail1">Frist Name <strong class="text-danger"> * </strong> </label>
               <input value="{{ $data->fname }}" name="fname" type="text" class="form-control @error('fname')is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
               <small id="emailHelp" class="form-text text-muted"> @error('phoneno')
               {{ $message }}
               @enderror
               </small>
            </div>
            <div class="form-group">
               <label for="exampleInputEmail1">Last Name <strong class="text-danger"> * </strong></label>
               <input value="{{ $data->lname }}" name="lname" type="text" class="form-control @error('lname')is-invalid @enderror " id="exampleInputEmail1" aria-describedby="emailHelp">
               <small id="emailHelp" class="form-text text-muted"> @error('phoneno')
               {{ $message }}
               @enderror
               </small>
            </div>
            <div class="form-group">
               <label for="exampleInputEmail1">Phone Number <strong class="text-danger"> * </strong></label>
               <input value="{{ $data->phoneno }}" name="phoneno" type="number" class="form-control @error('phoneno')is-invalid @enderror " id="exampleInputEmail1" aria-describedby="emailHelp">
               <small id="emailHelp" class="form-text text-muted">
               @error('phoneno')
               {{ $message }}
               @enderror
               </small>
            </div>
            <div class="form-group">
               <label for="exampleInputEmail1">Address <strong class="text-danger"> * </strong></label>
               <input value="{{ $data->address }}" name="address" type="text" class="form-control @error('address')is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
               <small id="emailHelp" class="form-text text-muted"> @error('phoneno')
               {{ $message }}
               @enderror
               </small>
            </div>
            <div class="modal-footer">
               <button type="submit" class="btn btn-primary">Add</button>
            </div>
         </form>
      </div>
   </div>
</div>
</div>
<!-- Modal  For Create -->
@endsection