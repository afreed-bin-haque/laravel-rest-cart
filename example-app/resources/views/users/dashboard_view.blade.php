@extends('users.dashboard_main')
@section('dashboard_view')
<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col text-center">
        <h2>Your product list</h2>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col">
  <div class="table-responsive">
  <table class="table table-hover">
      <tbody>
      @foreach($total_order as $orders)
          <tr>
              <td>
              <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="{{ asset($orders->product_image) }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">{{ $orders-> product_name }}</h5>
            <p>Country of manufacture: {{ $orders-> origin }}</p>
            <p class="card-text"><small class="text-muted">{{ Carbon\Carbon::parse($orders->created_at)->diffForHumans() }}</small></p>
            <p> <span class="btn" style="background-color: #E2716D;color:white;border-radius:25px;text-align:center;">{{ $orders-> price }}</span> [Per pair]</p>
            <div class="d-grid gap-2 col-6 mx-auto">
            <a href="{{ url('oder/list/'.$orders->product_id) }}" class="btn btn-light"
            style=" background-color:#E8E4D7;
            ;background-image: linear-gradient(45deg, to left,#E8E4D7 ,#EAE4D0 25%,  #f1dfa6 50%);
            color:black;
            border-radius:10px;"
            type="button">Add to Order</a>
            </div>
            </div>
            </div>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
  {{ $total_order->links() }}
</div>
  </div>
  </div>
</div>
@endsection
