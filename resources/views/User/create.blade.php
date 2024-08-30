@extends('home')
@section('ContentTables')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="card-title">Add User</div>
      </div>
      <div class="card-body">
        <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data" >
          @csrf
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="user_file">Upload File</label>
                <input type="file" class="form-control" id="user_file" name="profile_image" required>
              </div>
            </div>
          <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="role_name">Role</label>
                <select class="form-control" id="role_name" name="role_name" required>
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
                <label for="name">First Name</label>
                <input type="text" class="form-control" id="name" name="first_name" placeholder="Enter your name" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="name">Last Name</label>
                <input type="text" class="form-control" id="name" name="last_name" placeholder="Enter your name" required>
              </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
              </div>
            </div>
          </div>
          <div class="card-action">
            <button class="btn btn-success">Submit</button>
            <a class="btn btn-danger" href="{{route('users.index')}}"  >Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
