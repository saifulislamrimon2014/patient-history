@extends('layouts.dashboard-layout')

@section('title', 'All Records')

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
                  <span class="lead">Profile</span> <a href="{{ route('records.create') }}" class="btn btn-sm btn-success float-right">Add Records</a>
                </div>
                
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table table-striped table-bordered" id="table">
                      <thead class=" text-primary">
                        {{-- <th>SL</th> --}}
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Religion</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                        @foreach($records as $key=>$record)
                        <tr>
                          {{-- <td>{{ $key + 1 }}</td> --}}
                          <td>{{ $record->id }}</td>
                          <td>{{ $record->patient_name }}</td>
                          <td>{{ $record->age }}</td>
                          <td>{{ $record->sex }}</td>
                          <td>{{ $record->religion }}</td>
                          <td>{{ $record->created_at->diffForHumans() }}</td>
                          <td>{{ $record->updated_at->diffForHumans() }}</td>
                          <td class="text-center">
                            <a href="{{ route('records.show',$record->id) }}" target="_blank" class="card-header-primary py-1">Details</a>
                            <a href="{{ route('admin.dashboard.records.history', $record->id) }}" class="card-header-primary py-1">History</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
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