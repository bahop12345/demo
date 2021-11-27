@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-6" style="margin-top: 25px;">
    <!-- general form elements -->
    <div class="card ">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style="color: #fff;">Thêm phương thức thanh toán</h3>
    </div>
    <!-- /.card-header -->

    <!-- form start -->
    <form role="form" method="post" action="{{route('addmethodpay')}}">
        {{ csrf_field() }}
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Tên phương thức</label>
            <input type="text" class="form-control" id="name" name="payment_method" placeholder="Nhập tên phương thức">
        </div>
        @error('payment_method')
        <div class="" style="color: #FE2E2E;">{{ $message }}</div>
        @enderror
    </div>
    
<!-- /.card-body -->
<div class="card-footer">
  <button type="submit" class="btn btn-success" name="addNew">Thêm mới</button>
</div>
</form>
</div>
<!-- /.card -->
</div>
</div>
@endsection
