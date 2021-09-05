@extends('layouts.dashboard-layout')

@section('title')
  {{ $find->patient_name }}'s History
@endsection

@push('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endpush

@section('dashboard_content')

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 offset-3">
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
              <div class="card">
                <div class="card-header card-header-primary">
                  <span class="lead">History of "{{ $find->patient_name }}"</span> <a href="{{ URL()->previous() }}" class="btn btn-sm btn-success float-right">Go Back</a>
                </div>
                
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table table-striped table-bordered" id="table">
                      <thead class=" text-primary text-center">
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
                        @foreach($histories as $key=>$history)
                        <tr>
                          @if($history->id == $find->id)
                          {{-- <td>{{ $key + 1 }}</td> --}}
                          <td>{{ $history->id }}</td>
                          <td>{{ $history->patient_name }}</td>
                          <td>{{ $history->age }}</td>
                          <td>{{ $history->sex }}</td>
                          <td>{{ $history->religion }}</td>
                          <td>{{ $history->created_at->diffForHumans() }}</td>
                          <td>{{ $history->updated_at->diffForHumans() }}</td>
                          <td class="text-center">
                            <a href="{{ route('records.show',$history->id) }}" target="_blank" class="card-header-primary py-1">Details</a>
                          </td>
                          @else
                          @endif
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