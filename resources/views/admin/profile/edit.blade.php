@extends('layouts.dashboard-layout')

@section('title', 'Edit Profile')

@push('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endpush

@section('dashboard_content')

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
{{-- @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
              <div class="card">
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
                <div class="card-header card-header-primary">
                  <span class="lead">Input Doctor's Information</span> <a href="{{ route('profile.index') }}" class="btn btn-sm btn-success float-right">Back</a>
                </div>
                <div class="card-body">
                  <div class="row gutters-sm">
                      <div class="col-md-6 offset-3 mb-3">
                          <div class="card bg-transparent shadow-lg p-3 mb-5 bg-white rounded text-dark">
                            <div class="card-header card-header-primary">
                              <p class="my-0 text-white text-center">Update Doctor Profile</p>
                            </div>
                              <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                  <img src="{{ asset('storage/uploads/'. 'ProfilePicture/' . $doctor->image) }}" alt="Admin" class="rounded-circle mb-1 border-info border" width="150">
                                 <form action="{{ route('profile.update', $doctor->id) }}" method="POST" enctype="multipart/form-data">
                                      @csrf
                                      @method('PUT')
                                      <div class="form-group">
                                          <input type="text" class="form-control rounded-0 border-0" name="name" value="{{ $doctor->name }}">
                                      </div>
                                      <div class="form-group">
                                          <input type="text" class="form-control rounded-0 border-0" name="specialist" value="{{ $doctor->specialist }}">
                                      </div>
                                      <div class="form-group">
                                          <input type="text" class="form-control rounded-0 border-0" name="degree" value="{{ $doctor->degree }}">
                                      </div>
                                      <div class="form-group">
                                          <input type="number" class="form-control rounded-0 border-0" name="phone" value="{{ $doctor->phone }}">
                                      </div>
                                      <div class="form-group">
                                          <input type="email" class="form-control rounded-0 border-0" name="email" value="{{ $doctor->email }}">
                                      </div>
                                      <small class="my-0 text-info">Upload Doctor Profile Picture</small>
                                      <br>
                                      <input type="file" name="image" class="">
                                      <button type="submit" class="btn btn-info btn-sm float-right">Update</button>
                                  </form>
                                </div>
                              </div>
                          </div>
                      </div>
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