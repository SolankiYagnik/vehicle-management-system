@extends('admin.layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4>Add User</h4>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Create-User</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<form method="POST" enctype="multipart/form-data" action="{{ route('store-user') }}" class="row g-3 needs-validation" novalidate>
  @csrf
    <div class="col-md-8">
      
      <label for="validationCustom02" class="form-label">First name</label>
      <input type="text" name="first_name" class="form-control" id="validationCustom02" value="" required>
      <span style="color: red">@error('first_name'){{ $message }}@enderror</span>
    </div>

    <div class="col-md-8">
      <label for="validationCustom03" class="form-label">Last name</label>
      <input type="text" name="last_name" class="form-control" id="validationCustom03" value="" required>
      <span style="color: red">@error('last_name'){{ $message }}@enderror</span>
    </div>

    <div class="col-md-8">
      <label for="validationCustom03" class="form-label">Image</label>
      <input type="file" name="image" class="form-control" id="validationCustom03" value="" required>
      <span style="color: red">@error('image'){{ $message }}@enderror</span>
    </div>
    
    <div class="col-md-8">
      <label for="exampleInputEmail7">Email</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail7" aria-describedby="emailHelp" placeholder="Enter email" required>
      <span style="color: red">@error('email'){{ $message }}@enderror</span>
    </div>

    <div class="col-md-8">
      <label for="validationCustom03" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="validationCustom03" value="" required>
      <span style="color: red">@error('password'){{ $message }}@enderror</span> <br>
    </div>

    <div class="col-md-8">
      <label for="role">Choose a user type:</label>
      <select name="role" id="role">
        <option selected>Select User Type</option>
        <option value="1">Admin</option>
        <option value="2">Vendor</option>
        <option value="3">Service-Men</option>
      </select>
      <span style="color: red">@error('role'){{ $message }}@enderror</span> <br>
    </div>

    <div class="col-12">
      <button name="submit" class="btn btn-primary" type="submit">Submit form</button>
    </div>
</form>
@endsection