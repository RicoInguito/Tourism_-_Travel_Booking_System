@extends('home')
@section('ContentTables')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="card-title">Edit Destinations</div>
      </div>
      <div class="card-body">
        <form action="{{route('destinations.update', $destinations->id)}}" method="POST" enctype="multipart/form-data" >
          @csrf
          @method('PUT')
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" value="{{$destinations->name}}" id="name" name="name" placeholder="Enter your name">
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control"  value="{{$destinations->description}}" id="description" name="description" placeholder="Enter Description">
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="location">Location</label>
                <input type="location" class="form-control"  value="{{$destinations->location}}" id="location" name="destination_id" placeholder="Enter your Destination Id">
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
              <div>
                <label for="price">Price</label>
                <input type="number" step="0.01" name="price" placeholder="Enter Price" required>
               </div>
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