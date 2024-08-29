@extends('home')
@section('ContentTables')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="card-title">Add Tours</div>
      </div>
      <div class="card-body">
        <form action="{{route('tours.store')}}" method="POST" enctype="multipart/form-data" >
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
                <label for="destination_id">Destination ID</label>
                <input type="text" class="form-control" id="destination_id" name="destination_id" placeholder="Enter Destination_ID" required>

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
