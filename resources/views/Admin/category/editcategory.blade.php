@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-6" style="margin-top: 25px;">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Sửa danh mục</h3>
      </div>
      <!-- /.card-header -->

      <!-- form start -->
      <form role="form" method="post" action="{{route('editcategory',['id'=>$id])}}">

        {{ csrf_field() }}
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Tên danh mục</label>
            <input type="text" class="form-control" id="cat_name" name="cat_name" value="{{$edit->name}}">
              @error('cat_name')
            <div class="" style="color: #FE2E2E;">{{ $message }}</div>
            @enderror
          </div>

         </div>

        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary" name="addNew">Cập nhật</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
