@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card" style="margin-left: -40px; width: 60rem;">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style="color: #fff;">Danh sách tin tức - sự kiện </h3>
      </div>
      <form class="form-inline mr-auto" type="get" action="{{route('searchblogs')}}">
        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="button button1 " type="submit">Search</button>
      </form>
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
              <td>
                <button type="button" class="btn btn-info btn-lg" style="background-color: #4FC308;width: 25px;height: 25px;text-align: center;line-height: 30px;padding: 0;" data-toggle="modal" data-target="#myModal">...</button>
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">

                        <h4 class="modal-title">Description</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                        <p>{!!$value->content!!}</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
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
      <span>{{ $listblogs -> render()}}</span>
    </div>
  </div>
</div>
@endsection
