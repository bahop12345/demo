@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card" style="margin-left: -40px; width: 60rem;">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style="color: #fff;">Danh sách tin tức - sự kiện </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
            @csrf
          <thead>
            <tr>
              <th>#</th>
              <th>Tiêu đề</th>
              <th>Ảnh</th>
              <th>Tóm tắt</th>
              <th>Nội dung</th>
              <th>Trạng thái</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $listblogs as $value )
            <tr>
              <td>{{$value->id}}</td>
              <td>{{$value->title}}</td>
              <td>
                <img src="{{asset('storage/app/avatar/'.$value->image)}}" alt="" width="100">
              </td>
              <td>{!!$value->sumary!!}</td>
               <td>{!!$value->content!!}</td>
              <td>{{$value->status==0? 'Hiện' : 'Ẩn'}}</td>

              <td>
                <a href="{{ route('editblog',['id'=>$value -> id])}}" ><i class="fas fa-edit"></i></a>
                &nbsp;
                <a href="{{ route('removeblogs',['id'=>$value -> id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
             @endforeach
          </tbody>
        </table>

      </div>
  </div>
</div>
</div>
@endsection
