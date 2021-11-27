@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card" style="float: left;margin-top: 25px; width: 640px;">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style=" color: #fff;">Thêm mới tin tức </h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('addblog')}}">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Tiêu đề tin tức sự kiện</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nhập tiêu đề tin tức">

          </div>
          <div class="form-group">
            <div class="flie-img">
              <label for="exampleInputEmail1">Ảnh</label>
              <input type="file"  name="image"  id="img" onchange="changeImg(this)" style="width: 250px;margin-left: 15px;">
            </div>
            <img id="avatar" class="thumbnail" width="300px" src="" style="padding-top: 15px;">

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tóm tắt</label>
            <input type="text" class="form-control" id="sumary" name="sumary" placeholder="Nhập tóm tắt tin tức">

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nội dung</label>
            <textarea class="textarea " cols="40" rows="5" id="content" name="content"></textarea>

          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="0" checked>
            <label class="form-check-label" for="exampleRadios1">
              Hiện
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="1">
            <label class="form-check-label" for="exampleRadios2">
              Ẩn
            </label>
          </div>
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
