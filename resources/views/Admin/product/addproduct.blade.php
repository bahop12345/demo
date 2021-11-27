@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card" style="float: left;margin-top: 25px; width: 640px;">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style=" color: #fff;">Thêm mới sản phẩm</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form method="POST" enctype="multipart/form-data" >
        @csrf
       

        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Tên sản phẩm</label>
            <input type="text" class="form-control" id="pro_name" name="pro_name" placeholder="Nhập tên sản phẩm">
            @error('pro_name')
            <div class="" style="color: #FE2E2E;">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label>Danh mục</label>
            <select class="form-control" id="cat_id" name="cat_id">
              <option value="">-- Chọn Danh Mục --</option>
              @foreach( $category as $cat)
              <option value="{{$cat->id}}">{{$cat->name}}</option>
              @endforeach
            </select>
            @error('cat_id')
            <div class="" style="color: #FE2E2E;">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group @error('image') is-invalid @enderror">
            <label for="exampleInputEmail1">Ảnh</label>
            <input id="img" type="file" name="image" class="form-control" onchange="changeImg(this)">
            <img id="avatar" class="thumbnail" width="300px" src="" style="padding-top: 15px;">
            @error('image')
            <div class="" style="color: #FE2E2E;">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Giá</label>
            <input type="text" class="form-control  @error('price') is-invalid @enderror" id="price" name="price" placeholder="Nhập giá">
            @error('price')
            <div class="" style="color: #FE2E2E;">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Mô tả</label>
            <textarea class="textarea @error('description') is-invalid @enderror" cols="40" rows="5" id="description" name="description"></textarea>
            @error('description')
            <div class="" style="color: #FE2E2E;">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1" checked>
            <label class="form-check-label" for="exampleRadios1">
              Nổi Bật
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="0">
            <label class="form-check-label" for="exampleRadios2">
              Không
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
