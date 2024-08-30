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
                <select class="form-control" id="location" name="location" required>
                  <option value="">Select Location</option>
                  <option value="Boracay">Boracay</option>
                  <option value="Palawan">Palawan</option>
                  <option value="Kawasan">Kawasan Falls</option>
                  <option value="Batanes">Batanes Island</option>
                  <option value="Chocolate">Chocolate Hills</option>
                  <option value="Banaue">Banaue Rice Terraces</option>
                  <option value="others">Others</option>
                </select>
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
        <button class="btn btn-danger">Cancel</button>
        
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

@endsection
