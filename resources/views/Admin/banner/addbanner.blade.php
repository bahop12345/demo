@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-6" style="margin-top: 25px;">
    <!-- general form elements -->
    <div class="card ">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style="color: #fff;">Thêm mới Banner</h3>
      </div>
      <!-- /.card-header -->

      <!-- form start -->
      <form role="form" method="post" action="{{route('addbanner')}}" enctype="multipart/form-data">

       {{ csrf_field() }}
       <div class="form-group">
        <label for="formGroupExampleInput" style="margin-left: 20px;">Ảnh</label>
        <input type="file" name="img" class="form-control" id="img" style="width: 250px;margin-left: 15px;">
      </div>
      
      <div class="form-group">
        <label for="exampleInputEmail1">Mô tả</label>
        <textarea class="textarea @error('title') is-invalid @enderror" cols="40" rows="5" id="description" name="title"></textarea>
        @error('title')
        <div class="" style="color: #FE2E2E;">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2"  style="margin-left: 20px;">Position</label>
        <input type="number" class="form-control" id="position" name="position" style="width: 550px;margin-left: 15px;">
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
