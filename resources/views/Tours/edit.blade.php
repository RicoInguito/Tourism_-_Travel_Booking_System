@extends('home')
@section('ContentTables')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="card-title">Edit Tours</div>
      </div>
      <div class="card-body">
        <form action="{{route('tours.update', $tours->id)}}" method="POST" enctype="multipart/form-data" >
          @csrf
          @method('PUT')
          <div class="row">
          <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="tour_file">Upload File</label>
                <input type="file" class="form-control" id="tour_file" name="profile_image" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" value="{{$tours->name}}" id="name" name="name" placeholder="Enter your name">
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control"  value="{{$tours->description}}" id="description" name="description" placeholder="Enter Description">
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="destination_id">Destination ID</label>
                <input type="destination_id" class="form-control"  value="{{$tours->destination_id}}" id="destination_id" name="destination_id" placeholder="Enter your Destination Id">
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
