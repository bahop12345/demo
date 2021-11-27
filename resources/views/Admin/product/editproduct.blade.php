@extends('Admin.Layout.index')
@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="card" style="float: left;margin-top: 25px;width: 650px;">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style=" color: #fff;">Sửa sản phẩm</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" enctype="multipart/form-data" action="">
        @csrf
       

                <div class="card-body">

          <div class="form-group">

            <label for="exampleInputEmail1">Tên sản phẩm</label>
            <input type="text" class="form-control" id="pro_name" name="pro_name" value="{{$edit->pro_name}}">
        </div>
        
        <div class="form-group">
            <label>Danh mục</label>


            <select class="form-control" id="cat_id" name="cat_id">
                @foreach($listcat as $cat)
               
                <option value="{{$cat->id}} "{{$cat->id==$edit->category_id?'selected':''}}>{{$cat->name}}</option>

                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Ảnh</label>
            <input id="img" type="file" name="image" class="form-control hidden" onchange="changeImg(this)">
            <img id="avatar" class="thumbnail" width="300px" src="{{asset('public/frontend/imgs/'.$edit->image)}}" style="padding-top: 15px;">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Giá</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$edit->price}}">
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Mô tả</label>
            <textarea class="textarea" cols="40" rows="5" id="description" name="description" value="{{$edit->description}}">{{$edit->description}}</textarea>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1" checked>
            <label class="form-check-label" for="exampleRadios1"> Nổi Bật  </label>
        </div>
        <div class="form-check">
         <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="0">
         <label class="form-check-label" for="exampleRadios2">Không</label>
     </div>




     <!-- /.card-body -->
     <div class="card-footer">
        <button type="submit" class="btn btn-success" name="addNew">Cập nhật</button>
    </div>
    {{csrf_field()}}
</form>
@endsection
