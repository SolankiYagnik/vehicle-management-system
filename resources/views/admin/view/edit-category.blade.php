@extends('admin.layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4>Category Edit</h4>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User-Category</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<form method="POST" action="{{ route('update-category',$category->id) }}" class="row g-3 needs-validation" novalidate>
  @csrf
    <div class="col-md-8">
      <label for="validationCustom02" class="form-label">Category name</label>
      <input type="text" name="category_name" class="form-control" id="validationCustom02" value="{{ $category->category_name }}" required>
      <span style="color: red">@error('category_name'){{ $message }}@enderror</span>
    </div>

    <div class="col-12">
      <button name="submit" class="btn btn-primary" type="submit">Update form</button>
    </div>
</form>
@endsection