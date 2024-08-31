@extends('home')
@section('ContentTables')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="card-title">Edit Locations</div>
      </div>
      <div class="card-body">
        <form action="{{route('locations.update', $locations->id)}}" method="POST" enctype="multipart/form-data" >
          @csrf
          @method('PUT')
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
                <input type="text" class="form-control" value="{{$locations->location_name}}" id="location_name" name="location_name" placeholder="Enter Location Name">
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="place">Place</label>
                <input type="text" class="form-control"  value="{{$locations->place}}" id="place" name="place" placeholder="Enter Place">
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="city">City</label>
                <input type="city" class="form-control"  value="{{$tours->city}}" id="city" name="city" placeholder="Enter City">
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
