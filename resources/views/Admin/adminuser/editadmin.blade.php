@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-6" style="margin-top: 25px;">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header" style="background: #4fc308;color: #fff;">
        <h3 class="card-title">Sửa Thông Tin Admin</h3>
      </div>
      <!-- /.card-header -->

      <!-- form start -->
     <form role="form" method="post" action="">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control " id="email" name="email" value="{{$edit->email}}">
          </div>
           @error('email')
            <div class="" style="color: #FE2E2E;">{{ $message }}</div>
            @enderror
          <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="password" class="form-control " id="password" name="password" value="{{$edit->password}}">
          </div>
           @error('password')
            <div class="" style="color: #FE2E2E;">{{ $message }}</div>
            @enderror
         </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-success" name="addNew">Cập nhật</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
