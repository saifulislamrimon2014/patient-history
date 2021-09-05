@extends('layouts.dashboard-layout')

@section('title', 'Doctor Profile')

@push('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endpush

@section('dashboard_content')

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <span class="lead">Profile</span> 
                  @if ($doctor->count() == false)
                    <a href="{{ route('profile.create') }}" class="btn btn-sm btn-success float-right">Create</a>
                  @endif
                </div>
                <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        @if (session('success'))
                            <div class="alert alert-success mt-3">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                                <span>{{ session('success') }}</span>
                            </div>
                        @endif
                        @if (session('danger'))
                            <div class="alert alert-danger mt-3">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                                <span>{{ session('danger') }}</span>
                            </div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning mt-3">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="material-icons">close</i>
                                </button>
                                <span>{{ session('warning') }}</span>
                            </div>
                        @endif
                    </div>
                </div>
                  <div class="row gutters-sm">
                    @foreach ($doctor as $profile)
                      <div class="col-md-6 offset-3 mb-3">
                          <div class="card bg-transparent shadow-lg p-3 mb-5 bg-white rounded text-dark">
                              <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                  <img src="{{ asset('storage/uploads/'. 'ProfilePicture/' . $profile->image) }}" alt="Admin" class="rounded-circle mb-1 border-info border" width="150">
                                  <div class="mt-3">
                                    <h4>{{ $profile->name }}</h4>
                                    <p class="mb-3">{{ $profile->specialist }}</p>
                                    <p class="mb-3">{{ $profile->degree }}</p>
                                    <p class="mb-1">{{ $profile->phone }} (PS)</p>
                                    <p class="font-size-sm">{{ $profile->email }}</p>
                                      @if ($profile->status == true)
                                        <p class="text-success font-weight-bold mb-3">Available</p>
                                      @else
                                        <p class="text-danger font-weight-bold mb-3">Offline</p>
                                      @endif
                                      @if($profile->status == false)
                                        <a href="{{ route('admin.dashboard.doctor.available',$profile->id) }}" class="text-success">Active</a>
                                      @else
                                        <a href="{{ route('admin.dashboard.doctor.unavailable',$profile->id) }}" class="text-warning">Pause</a>
                                      @endif
                                    </p>
                                    <a href="{{ route('profile.edit',$profile->id) }}" class="btn btn-info btn-sm btn-block">Edit</a>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection

    @push('script')
      <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
      <script>
            $(document).ready(function() {
                $('#table').DataTable();
            } );
      </script>
    @endpush