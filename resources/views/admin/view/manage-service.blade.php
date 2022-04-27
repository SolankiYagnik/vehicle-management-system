@extends('admin.layouts.app')
@section('content')
  
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4>Manage Service Request</h4>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Manage Service Request</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                {{-- <a href="{{ route('add-user') }}" class="btn btn-primary">Add</a> <br><br> --}}
                <table id="myTable" class="table table-bordered data-table">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>User Id</th>
                          <th>Category Id</th>
                          <th>Vehicle Name</th>
                          <th>Vehicle Model</th>
                          <th>Vehicle Brand</th>
                          <th>Vehicle Register No</th>
                          <th>Service Date</th>
                          <th>Delivery Type</th>
                          <th>Status</th>
                          <th width="100px">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($manage_service as $service)     
                    <tr>
                      <td>{{ $service->id }}</td>
                      <td>{{ $service->user_id }}</td>
                      <td>{{ $service->category_id }}</td>
                      <td>{{ $service->vehicle_name }}</td>
                      <td>{{ $service->vehicle_model }}</td>
                      <td>{{ $service->vehicle_brand }}</td>
                      <td>{{ $service->vehicle_reg_no }}</td>
                      <td>{{ $service->service_date }}</td>
                      <td>{{ $service->delivery_type }}</td>
                      <td>{{ $service->status }}</td>
                      <td>
                        <a href=""><i style="color: green" class="fas fa-check"></i></a> &nbsp;
                        <a href=""><i style="color: red" class="fas fa-times"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    
</section>

@endsection