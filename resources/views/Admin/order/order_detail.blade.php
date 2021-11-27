@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card" style="margin-left: -40px; width: 60rem;padding-top: 10px;">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style="color: #fff;">Chi tiết đơn hàng</h3>
      </div>

      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
          @csrf
          <thead>
            <tr>
              <th>Ảnh sản phẩm</th>
              <th>Tên sản phẩm</th>
              <th>Số lượng</th>
              <th>Thành Tiền</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $transactions as $value )
            <tr>
              <td>
            <img src="{{asset('storage/app/avatar/'.$value->image)}}" alt="" width="100">
             </td>
              <td>{{$value->pro_name}}</td>
              <td>{{$value->quantity}}</td>
              <td>{{$value->price}}</td>
            </tr>
          </tbody>
           @endforeach
         <div style="float: right;margin-bottom: 15px;">
            <div class="row">
               <div class="btn">
                 <a href="{{route('list_order')}}"><i class="fas fa-undo-alt"></i></a>
               </div>
            </div>
         </div>

        </table>

      </div>
    </div>
  </div>
</div>

@endsection


