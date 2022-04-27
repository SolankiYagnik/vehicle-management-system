@extends('customer.layouts.app')

@section('content')
<div class="container h-100 d-flex justify-content-center">
  <div class="jumbotron my-auto">
    <h2>Hello {{ Auth::user()->last_name }}</h2>
  </div>
</div>
@endsection