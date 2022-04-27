@extends('admin.layouts.app')

@section('content')
  <h2>Hello {{ Auth::user()->last_name }}</h2>
@endsection