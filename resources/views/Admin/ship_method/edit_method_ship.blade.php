@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-6" style="margin-top: 25px;">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style="color: #fff;">Sửa phương thức</h3>
      </div>
      <!-- /.card-header -->

      <!-- form start -->
      <form role="form" method="post" action="{{route('editmethod',['id'=>$id])}}">

        {{ csrf_field() }}
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Tên phương thức</label>
            <input type="text" class="form-control " id="name" name="name" value="{{$edit->name}}">
              @error('name')
            <div class="" style="color: #FE2E2E;">{{ $message }}</div>
            @enderror
          </div>
         <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="0" @if($edit->status == 0) checked @endif>
              <label class="form-check-label" for="exampleRadios1">
                Hiện
            </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="1" @if($edit->status == 1) checked @endif>
          <label class="form-check-label" for="exampleRadios2">
            Ẩn
        </label>
    </div>
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
