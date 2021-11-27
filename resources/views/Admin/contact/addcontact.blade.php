@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-6" style="margin-top: 25px;">
    <!-- general form elements -->
    <div class="card ">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style="color: #fff;">Thêm Địa chỉ</h3>
    </div>
    <!-- /.card-header -->

    <!-- form start -->
    <form role="form" method="post" action="{{route('postcontact')}}" enctype="multipart/form-data">

       {{ csrf_field() }}
       <div class="form-group">
        <label for="formGroupExampleInput" style="margin-left: 20px;">Logo</label>
        <input id="img" type="file" name="img" class="form-control" onchange="changeImg(this)">
        <img id="avatar" class="thumbnail" width="300px" src="" style="padding-top: 15px;">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2"  style="margin-left: 20px;">Số điện thoại</label>
        <input type="number" class="form-control" id="phone" name="phone" style="width: 550px;margin-left: 15px;">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2"  style="margin-left: 20px;">Email</label>
        <input type="email" class="form-control" id="email" name="email" style="width: 550px;margin-left: 15px;">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2"  style="margin-left: 20px;">Địa chỉ</label>
        <input type="text" class="form-control" id="address" name="address" style="width: 550px;margin-left: 15px;">
    </div>
    
    <div class="form-group">
        <label for="exampleInputEmail1">Google map</label>
        <input type="text" class="form-control" id="address" name="map" cols="40" rows="5" style="width: 550px;margin-left: 15px;">
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

