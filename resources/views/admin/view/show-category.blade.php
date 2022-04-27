@extends('admin.layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Category</h2>
        </div>
    </div>
</div>
<br><br>
<div class="row">
    <div class="col-md-8 offset-md-2">
        <strong>Category Name:</strong> 
        {{ $categoryShow->category_name }}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="{{ route('manage-category') }}"> Back</a>
    </div>
</div>
@endsection