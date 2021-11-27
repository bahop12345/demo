@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card" style="float: left;margin-top: 25px; width: 640px;">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style=" color: #fff;">Thêm mới user</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('adduser')}}">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Email user</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Nhập tên email">

          </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Nhập tên password">

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
