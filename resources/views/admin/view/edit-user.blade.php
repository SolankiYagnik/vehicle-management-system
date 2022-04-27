@extends('admin.layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4>User Edit</h4>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User-Edit</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<form method="POST" enctype="multipart/form-data" action="{{ route('update-user',$user->id) }}" class="row g-3 needs-validation" novalidate>
  @csrf
    <div class="col-md-8">
      
      <label for="validationCustom02" class="form-label">First name</label>
      <input type="text" name="first_name" class="form-control" id="validationCustom02" value="{{ $user->first_name }}" required>
      <span style="color: red">@error('first_name'){{ $message }}@enderror</span>

    </div>

    <div class="col-md-8">
      <label for="validationCustom03" class="form-label">Last name</label>
      <input type="text" name="last_name" class="form-control" id="validationCustom03" value="{{ $user->last_name }}" required>
      <span style="color: red">@error('last_name'){{ $message }}@enderror</span>
    </div>

    <div class="col-md-8">
      <label for="validationCustom03" class="form-label">Image</label>
      <input type="file" name="image" class="form-control" id="validationCustom03" value="{{ $user->image }}" required>
      <img width="50px" height="auto" src="{{ asset('storage/images/'.$user->image) }}" alt="" title="">
      <span style="color: red">@error('image'){{ $message }}@enderror</span>
    </div>

    <div class="col-md-8">
      <label for="exampleInputEmail7">Email</label>
      <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="exampleInputEmail7" aria-describedby="emailHelp" placeholder="Enter email" required>
      <span style="color: red">@error('email'){{ $message }}@enderror</span>
    </div>

    <div class="col-md-8">
      <label for="validationCustom03" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="validationCustom03" value="">
      <p>Current Password 123456</p>
    </div>

    <div class="col-md-8">
      <label for="validationCustom03" class="form-label">Role</label>
      <input type="text" name="role" class="form-control" id="validationCustom03" value="{{ $user->role }}">
      <span style="color: red">@error('role'){{ $message }}@enderror</span>
    </div>

    <div class="col-12">
      <button name="submit" class="btn btn-primary" type="submit">Update form</button>
    </div>
</form>
@endsection