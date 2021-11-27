@extends('Admin.Layout.index')

@section('content')


<div class="row">
  <!-- left column -->
  <div class="col-md-6" style="margin-top: 25px;">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Thêm mới</h3>
      </div>
      <!-- /.card-header -->

      <!-- form start -->
      <form role="form" method="post" action="category/addcategory">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Tên danh mục</label>
            <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Nhập tên danh mục">
          </div>
         <div class="row">
             <div class="custom-control custom-radio">
               <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
               <label class="custom-control-label" for="customRadio1">Ẩn</label>
             </div>&nbsp;&nbsp;&nbsp;
             <div class="custom-control custom-radio">
               <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
               <label class="custom-control-label" for="customRadio2">Hiện</label>
             </div>
                     </div>
         </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary" name="addNew">Thêm mới</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
</div>


@endsection
