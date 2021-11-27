@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-6" style="margin-top: 25px;">
    <!-- general form elements -->
    <div class="card ">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style="color: #fff;">Thêm phương thức giao hàng</h3>
    </div>
    <!-- /.card-header -->

    <!-- form start -->
    <form role="form" method="post" action="{{route('addmethodship')}}">
        {{ csrf_field() }}
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Tên phương thức</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên phương thức">
        </div>
        @error('name')
        <div class="" style="color: #FE2E2E;">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-check" style="padding-left: 50px;">
      <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="0" checked>
      <label class="form-check-label" for="exampleRadios1">
        Hiện
    </label>
</div>
<div class="form-check" style="padding-left: 50px;">
  <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="1">
  <label class="form-check-label" for="exampleRadios2">
    Ẩn
</label>
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
