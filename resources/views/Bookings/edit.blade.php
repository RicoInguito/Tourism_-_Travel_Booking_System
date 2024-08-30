@extends('home')
@section('ContentTables')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="card-title">Edit Bookings</div>
      </div>
      <div class="card-body">
        <form action="{{route('bookings.update', $bookings->id)}}" method="POST" enctype="multipart/form-data" >
          @csrf
          @method('PUT')
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="user_id">User ID</label>
                <input type="id" class="form-control"  value="{{$bookings->id}}" id="id" name="id" placeholder="Enter your user_id">
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control"  value="{{$bookings->name}}" id="name" name="name" placeholder="Enter name">
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="date">Booking Date</label>
                <input type="date" class="form-control"  value="{{$bookings->date}}" id="date" name="date" placeholder="Enter your booking date">
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control"  value="{{$bookings->status}}" id="status" name="status" placeholder="Enter status">
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
