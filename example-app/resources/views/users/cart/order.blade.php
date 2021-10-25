@extends('users.dashboard_main')
@section('dashboard_view')
<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col text-center">
        <h2>Order list</h2>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col">
    <div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
    @foreach($product as $product)
      <img src="{{ asset($product->product_image) }}" class="img-fluid rounded-start" alt="...">
      <p class="text-center" style="font-family: 'Brush Script MT', cursive;font-size: 160%;">{{ $product->product_name }}</p>
      <p class="text-center"> <input class="text" style="background-color: #E2716D;color:white;border-radius:25px;text-align:center;" value="{{ $product-> price }}" readonly>
      <br> [Per pair]</p>
      <p class="card-text text-center">From: {{ $product->origin }}</p>
      @endforeach
      @foreach($order as $order)
            <p class="card-text text-center">To: {{ $order->to_coutry }}</p>
            @endforeach
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <table style=" background-repeat:no-repeat; width:450px;margin:0;" cellpadding="0" cellspacing="0" border="0">
   <tr style="height:40px; width:450px; margin:0;">
     <td style="height:40px; width:40px; margin:0;">
     <label>Select color</label>
     @foreach($color as $color)
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="{{ $color->product_name }}">
  <img src="{{ asset($color->color) }}" class="img-thumbnail" alt="..." width="50px" height="25px">
</div>
@endforeach
     </td>
   </tr>
</table>
        <div class="card-text">

        <table class="table">
        <thead>
    <tr>
      <th scope="col">Size</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($size as $size)
      <td>{{ $size->size }}</td>
      <td><input type="number" class="form-control"  min="0" max="{{ $size->quantity }}"></td>
    </tr>
    @endforeach
  </tbody>
</table>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
  </div>
  </div>
</div>
@endsection
