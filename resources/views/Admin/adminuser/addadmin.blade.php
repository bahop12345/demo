@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-6" style="margin-top: 25px;">
    <!-- general form elements -->
    <div class="card ">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style="color: #fff;">Thêm mới Admin</h3>
    </div>
    <!-- /.card-header -->

    <!-- form start -->
    <form role="form" method="post" action="{{route('addadmin')}}">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control " id="email" name="email" placeholder="email">
            </div>
            @error('email')
            <div class="" style="color: #FE2E2E;">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control " id="password" name="password" placeholder="password">
            </div>
            @error('password')
            <div class="" style="color: #FE2E2E;">{{ $message }}</div>
            @enderror
             <div class="form-group">
            <label for="exampleInputEmail1">Chọn nhóm quyền</label>

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
