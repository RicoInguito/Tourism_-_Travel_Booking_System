@extends('home')
@section('ContentTables')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="card-title">Add Destinations</div>
      </div>
      <div class="card-body">
        <form action="{{route('destinations.store')}}" method="POST" enctype="multipart/form-data" >
          @csrf
          <div class="row">
          <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="destination_file">Upload File</label>
                <input type="file" class="form-control" id="destination_file" name="profile_image" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price" required>
              </div>
            </div>
          </div>
          <div class="card-action">
        <button class="btn btn-success">Submit</button>
        <a href="{{route('destinations.index')}}" class="btn btn-danger">Cancel</a>
        
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

@endsection
