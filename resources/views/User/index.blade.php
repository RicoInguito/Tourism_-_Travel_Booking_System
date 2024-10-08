@extends('home')
@section('ContentTables')

<div class="col-md-12">
  <div class="card">
    <div class="card-header">
      <div class="d-flex align-items-center">
        <h4 class="card-title">Users</h4>
        <a class="btn btn-primary btn-round ms-auto" href="{{ route('users.create') }}">
          <i class="fa fa-plus"></i> Add User
        </a>
      </div>
    </div>
    <div class="card-body">
      <!-- Modal -->
      <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header border-0">
              <h5 class="modal-title">
                <span class="fw-mediumbold">New</span>
                <span class="fw-light">Row</span>
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-footer border-0">
              <button type="button" id="addRowButton" class="btn btn-primary">Add</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="table-responsive">
        <table id="add-row" class="display table table-striped table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th></th>
              <th>Name</th>
              <th>Role</th>
              <th>Email</th>
              <th style="width: 10%">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>
                <!-- Avatar and ID -->
                <div class="d-flex align-items-center">
                  <!-- Assuming you have a column or function that provides avatar path -->
                
                  <span class="ms-2">{{ ucfirst($user->id) }}</span>
                 
                 
                </div>
              </td>
              <td> 
                @if ($user->profile_image)
                  <img src="{{ asset('storage/'. $user->profile_image) }}" alt="Avatar" class="rounded-circle" width="40" height="40">
                  @else
                  <img src="{{ asset('asset/img/boracay.jpg') }}" alt="Avatar" class="rounded-circle" width="40" height="40">
                  @endif
                </td>
              <td>{{ ucfirst($user->full_name) }}</td>
              <td>{{ ucfirst($user->role_name) }}</td>
              <td>{{ $user->email }}</td>
              <td>
                <div class="form-button-action">
                  <a href="{{ route('users.edit', $user->id) }}" class="btn btn-link btn-primary btn-lg" data-bs-toggle="tooltip" data-original-title="Edit Task">
                    <i class="fa fa-edit"></i>
                  </a>
                  <form action="{{ route('users.destroy', $user->id) }}" method="post" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link btn-danger" data-bs-toggle="tooltip" data-original-title="Remove">
                      <i class="fa fa-times"></i>
                    </button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $users->links() }}
      </div>
    </div>
  </div>
</div>
@endsection
