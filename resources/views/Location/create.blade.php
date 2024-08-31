@extends('home')
@section('ContentTables')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="card-title">Add Locations</div>
      </div>
      <div class="card-body">
        <form action="{{route('locations.store')}}" method="POST" enctype="multipart/form-data" >
          @csrf
          <div class="row">
          <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="location_file">Upload File</label>
                <input type="file" class="form-control" id="location_file" name="profile_image" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="location_name">Location_Name</label>
                <input type="text" class="form-control" id="location_name" name="name" placeholder="Enter Location_Name" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="place">Place</label>
                <input type="text" class="form-control" id="place" name="place" placeholder="Enter Place" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Enter City" required>

              </div>
            </div>
          </div>
          <div class="card-action">
        <button class="btn btn-success">Submit</button>
        <button class="btn btn-danger">Cancel</button>
        
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

@endsection
