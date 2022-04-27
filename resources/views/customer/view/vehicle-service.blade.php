@extends('customer.layouts.app')

@section('content')
<form action="{{ route('service') }}" method="POST">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
          <label for="">Category</label>
        <select name="category_id" class="form-control">
            <option selected>Choose...</option> 
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
                <span style="color: red">@error('category_id'){{ $message }}@enderror</span>
        </select>
        
      </div>
      <div class="form-group col-md-6">
        <label>Vehicle Name</label>
        <input type="text" name="vehicle_name" class="form-control" id="inputPassword4" placeholder="vehicle name">
        <span style="color: red">@error('vehicle_name'){{ $message }}@enderror</span>  
      </div>
    </div>

    <div class="form-group">
      <label for="inputAddress">Vehicle Model</label>
      <input type="text" name="vehicle_model" class="form-control" id="inputAddress" placeholder="Vehicle Model">
      <span style="color: red">@error('vehicle_model'){{ $message }}@enderror</span>
    </div>

    <div class="form-group">
      <label for="inputAddress2">Vehicle Brand</label>
      <input type="text" name="vehicle_brand" class="form-control" id="inputAddress2" placeholder="vehicle brand">
      <span style="color: red">@error('vehicle_brand'){{ $message }}@enderror</span>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Vehicle Reg No</label>
        <input type="text" name="vehicle_reg_no" class="form-control" id="inputCity" placeholder="vehicle reg no">
        <span style="color: red">@error('vehicle_reg_no'){{ $message }}@enderror</span>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Service Date</label>
        <input type="date" name="service_date" class="form-control">
        <span style="color: red">@error('service_date'){{ $message }}@enderror</span>
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Delivery Type</label>
        <select name="delivery_type" class="form-control">
          <option selected>Choose...</option>
          <option>Home</option>
          <option>Service Center</option>
        </select>
        <span style="color: red">@error('delivery_type'){{ $message }}@enderror</span>
      </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
@endsection