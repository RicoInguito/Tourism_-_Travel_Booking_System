@extends('home')
@section('ContentTables')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="card-title">Add bookings</div>
      </div>
      <div class="card-body">
        <form action="{{route('bookings.store')}}" method="POST" enctype="multipart/form-data" >
          @csrf
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="booking_id">Booking ID</label>
                <input type="text" class="form-control" id="booking_id" name="booking_id" placeholder="Enter Your Name" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="tour_id">Tour ID</label>
                <input type="text" class="form-control" id="tour_id" name="tour_id" placeholder="Enter Tour ID" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="user_id">User ID</label>
                <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Enter User Id" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="booking_date">Booking Date</label>
                <input type="text" class="form-control" id="booking_date" name="booking_date" placeholder="Enter Booking Date" required>
              </div>
            </div>
            <!-- <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
              </div>
            </div> -->
          </div>
          <div class="card-action">
        <button class="btn btn-success">Submit</button>
        <a href="#" class="btn btn-danger">Cancel</a>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

@endsection
