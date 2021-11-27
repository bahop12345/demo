@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card" style="margin-left: -40px; width: 60rem;padding-top: 10px;">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style="color: #fff;">Danh sách đơn hàng</h3>
    </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table class="table table-bordered">
        @csrf
        <thead>
            <tr>
              <th>Tên khách hàng</th>
              <th>Địa chỉ</th>
              <th>SDT</th>
              <th>Phương thức thanh toán</th>
              <th>Tổng Tiền</th>
              <th style="text-align: center;">Xem </th>
              <th style="text-align: center;">Xóa</th>
          </tr>
      </thead>
      <tbody>
        @foreach( $transactions as $value )
        <tr>
          <td>{{$value->name}}</td>
          <td>{{$value->commune}},{{$value->district}},{{$value->city}}</td>
          <td>{{$value->phone}}</td>
          <td>{{$value->payment_method}}</td>
          <td>{{$value->total_price}}</td>
        <td style="text-align: center;">
            <a href="{{route('order_detail',['id'=>$value->id])}}"><i class="fas fa-eye"></i></a>
        </td>
        <td style="text-align: center;">
            <a href="{{ route('remove_order',$value->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');"><i class="fas fa-trash-alt"></i></a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>

</div>
  {{ $transactions->render()}}
</div>
</div>
</div>

@endsection


