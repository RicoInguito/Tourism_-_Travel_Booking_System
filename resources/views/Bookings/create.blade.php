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
                <label for="id">User_ID</label>
                <input type="text" class="form-control" id="id" name="id" placeholder="Enter user_id" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="booking_date">Booking Date</label>
                <input type="date" class="form-control" id="booking_date" name="booking_date" placeholder="Enter Booking Date" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="date" class="form-control" id="date" name="start_date" placeholder="Enter Start Date" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="date" class="form-control" id="date" name="end_date" placeholder="Enter End Date" required>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
              <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" id="status" name="status" placeholder="Enter status" required>
              </div>
            </div>
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
