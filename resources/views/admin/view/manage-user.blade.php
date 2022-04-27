@extends('admin.layouts.app')
@section('content')
  
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4>Manage User</h4>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Manage User</li>
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
                <a href="{{ route('add-user') }}" class="btn btn-primary">Add</a> <br><br>
                <table id="myTable" class="table table-bordered data-table">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Image</th>
                          <th>Email</th>
                          <th>Role</th>
                          <th width="100px">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($manage_user as $user)     
                    <tr>
                      <td>{{ $user->id }}</td>
                      <td>{{ $user->first_name }}</td>
                      <td>{{ $user->last_name }}</td>
                      <td><img width="50px" height="auto" src="{{ asset('storage/images/'.$user->image) }}" alt="" title=""></td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->role }}</td>
                      <td>
                        <a href="{{ route('edit-user',$user->id) }}"><i style="color: green" class="fas fa-edit"></i></a>
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