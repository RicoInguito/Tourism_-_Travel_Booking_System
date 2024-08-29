@extends('home')
@section('ContentTables')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="card-title">Edit User</div>
      </div>
      <div class="card-body">
        <form action="{{route('users.update', $user->id)}}" method="POST" enctype="multipart/form-data" >
          @csrf
          @method('PUT')
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" value="{{$user->name}}" id="name" name="name" placeholder="Enter your name">
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="role_name">Role</label>
                <select class="form-control" id="role_name" name="role_name">
                  <option value="">Select Role</option>
                  <option value="Admin">Admin</option>
                  <option value="Agent">Agent</option>
                  <option value="Customer">Customer</option>
                  <option value="Partner">Partner</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control"  value="{{$user->email}}" id="email" name="email" placeholder="Enter your email">
              </div>
            </div>
          </div>
          <div class="card-action">
        <button class="btn btn-success">Update</button>
        <button class="btn btn-danger">Cancel</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>
@endsection