@extends('admin.layouts.app')
@section('content')
  
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4>Manage Category</h4>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Manage Category</li>
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
                <a href="{{ route('add-category') }}" class="btn btn-primary">Add</a> <br><br>
                <table id="myTable" class="table table-bordered data-table">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Category Name</th>
                          <th width="100px">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($manage_category as $category)     
                    <tr>
                      <td>{{ $category->id }}</td>
                      <td>{{ $category->category_name }}</td>
                      <td>
                        <a href="{{ route('show-category',$category->id) }}"><i style="color: rgb(92, 63, 63)" class="fas fa-eye"></i></a>&nbsp;&nbsp;&nbsp;
                        <a href="{{ route('edit-category',$category->id) }}"><i style="color: green" class="fas fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                        <a href="{{ route('destroy-category',$category->id) }}"><i style="color: red" class="fas fa-trash"></i></a>
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