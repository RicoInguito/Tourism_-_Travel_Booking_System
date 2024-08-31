@extends('home')
@section('ContentTables')


<div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="card-title">Locations</h4>
                      <a
                        class="btn btn-primary btn-round ms-auto"
                        href="{{route('locations.create')}}"
                      >
                        <i class="fa fa-plus"></i>
                        Add Locations
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <!-- Modal -->
                    <div
                      class="modal fade"
                      id="addRowModal"
                      tabindex="-1"
                      role="dialog"
                      aria-hidden="true">
                    <div class="table-responsive">
                      <table
                        id="add-row"
                        class="display table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Location Name</th>
                            <th>Place</th>
                            <th>City</th>
                            <th style="width: 10%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($locations as  $location)
                        <tr>
                        <td>
                          <!-- Avatar and ID -->
                          <div class="d-flex align-items-center">
                            <span class="ms-2">{{ ucfirst($location->id) }}</span>
                          </div>
                        </td>
                        <td> 
                          @if ($location->profile_image)
                            <img src="{{ asset('storage/'. $location->profile_image) }}" alt="Avatar" class="rounded-circle" width="40" height="40">
                            @else
                            <img src="{{ asset('img/boracay.jpg') }}" alt="Avatar" class="rounded-circle" width="40" height="40">
                            @endif
                          </td>
                        <td>{{ ucfirst($location->location_name) }}</td>
                        <td>{{ ucfirst($location->place) }}</td>
                        <td>{{ ucfirst($location->city) }}</td>
                        <td>
                              <div class="form-button-action">
                                <a
                                  type="button"
                                  href="{{route('locations.edit', $location->id)}}"
                                  data-bs-toggle="tooltip"
                                  title=""
                                  class="btn btn-link btn-primary btn-lg"
                                  data-original-title="Edit Task"
                                >
                                  <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{route('locations.destroy', $location->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                <button 
                                  type="submit"
                                  data-bs-toggle="tooltip"
                                  title=""
                                  class="btn btn-link btn-danger"
                                  data-original-title="Remove"
                                >
                                  <i class="fa fa-times"></i>
                                </button>
                                </form>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>

                      </table>
                    </div>
                  </div>
                </div>
              </div>
              @endsection