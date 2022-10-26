@extends('layouts.layout')

@section('content')

     <!-- /.card -->
     <div class="card">
      <div class="card-header">
        <h3 class="card-title">Perusahaan</h3><div class="card-tools">
          <div class="input-group input-group-sm" style="width: 250px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      
    <div class="row mt-5">
        <div class="col-lg-20 margin-tb">
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('perusahaan.create') }}"> Create New Perusahaan</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama Perusahaan</th>
              <th>Alamat Perusahaan</th>
              <th>Email</th>
              <th>No Perusahaan</th>
              <th>No Telpn Contact Person</th>
              <th></th>
            </tr>
            @foreach ($perusahaan as $item)
            <tr>
          </thead>
          <tbody>
            
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->nama_perusahaan }}</td>
              <td>{{ $item->alamat_perusahaan }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->no_perusahaan }}</td>
              <td>{{ $item->no_telpn_contact_person }}</td>
              <td>
                  <form action="{{ route('perusahaan.destroy',$item->id) }}" method="POST">
      
                      <a class="btn btn-primary" href="{{ route('perusahaan.edit',$item->id) }}">Edit</a>
      
                      @csrf
                      @method('DELETE')
        
                      <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
              </td>
          </tr>
          @endforeach
          </tbody>
          <tfoot>
        </table>
      </div>
      <div class="row">
    <div class="col-sm-12 col-md-5">
      <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
        Showing 1 to 10 of 57 entries
      </div>
    </div>
    <div class="col-sm-12 col-md-7">
      <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
        <ul class="pagination">
          <li class="paginate_button page-item previous disabled" id="example1_previous">
          <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous
            </a>
          </li>
          <li class="paginate_button page-item active">
            <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1
              </a></li><li class="paginate_button page-item ">
                <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2
                  </a>
                </li>
                <li class="paginate_button page-item ">
                  <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3
                    </a>
                  </li>
                  <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4
                      </a>
                    </li>
                    <li class="paginate_button page-item ">
                      <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5
                        </a>
                      </li>
                      <li class="paginate_button page-item ">
                        <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6
                          </a>
                        </li>
                        <li class="paginate_button page-item next" id="example1_next">
                          <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
      </div>
      <!-- /.card-body -->
    </div>
    
    <!-- /.card -->
@endsection