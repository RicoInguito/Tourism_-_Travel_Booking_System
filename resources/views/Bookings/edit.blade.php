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
                <label for="name">Booking ID</label>
                <input type="text" class="form-control" value="{{$bookings->booking_id}}" id="booking_id" name="booking_id" placeholder="Enter ID">
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="tour_id">Tour ID</label>
                <input type="text" class="form-control"  value="{{$bookings->tour_id}}" id="tour_id" name="tour_id" placeholder="Enter Tour ID">
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="user_id">User ID</label>
                <input type="user_id" class="form-control"  value="{{$bookings->user_id}}" id="user_id" name="user_id" placeholder="Enter your User Id">
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="booking_date">Booking Date</label>
                <input type="booking_date" class="form-control"  value="{{$bookings->booking_date}}" id="booking_date" name="booking_date" placeholder="Enter your User Id">
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
