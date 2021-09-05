@extends('layouts.dashboard-layout')

@section('title', 'Create Profile')

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
                            <div class="card-header">
                              <p class="my-0 text-dark text-center">Add Doctor Profile</p>
                            </div>
                              <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                 <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                                      @csrf
                                      <div class="form-group">
                                          <input type="text" class="form-control rounded-0 border-0" name="name" placeholder="Enter doctor full name here">
                                      </div>
                                      <div class="form-group">
                                          <input type="text" class="form-control rounded-0 border-0" name="specialist" placeholder="Enter doctor Specialities">
                                      </div>
                                      <div class="form-group">
                                          <input type="text" class="form-control rounded-0 border-0" name="degree" placeholder="Enter doctor Degree">
                                      </div>
                                      <div class="form-group">
                                          <input type="number" class="form-control rounded-0 border-0" name="phone" placeholder="Enter doctor Contact Number">
                                      </div>
                                      <div class="form-group">
                                          <input type="email" class="form-control rounded-0 border-0" name="email" placeholder="Enter doctor Email">
                                      </div>
                                      <small class="my-0 text-info">Upload Doctor Profile Picture</small>
                                      <br>
                                      <input type="file" name="image" class="">
                                      <button type="submit" class="btn btn-info btn-sm float-right">Create</button>
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