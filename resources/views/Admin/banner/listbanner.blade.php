@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card" style="margin-left: -40px; width: 60rem;">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style="color: #fff;">Danh sách Banner</h3>
      </div>
      <form class="form-inline mr-auto" type="get" action="{{route('searchbanner')}}">
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
              <th>Ảnh</th>
              <th>Title</th>
              <th>Position</th>
              <th>Ngày Tạo</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach( $list_ban as $list_banner )
            <tr>
              <td>{{$list_banner->id}}</td>
              <td>
                <img src="{{asset('storage/app/avatar/'.$list_banner->image)}}" alt="" width="100">
              </td>
              <td>{!!$list_banner->title!!}</td>
              <td>{!!$list_banner->position!!}</td>
              <td>{{$list_banner->created_at}}</td>
              <td>
                <a href="{{ route('editbanner',['id'=>$list_banner -> id])}}" ><i class="fas fa-edit"></i></a>
                &nbsp;
                <a href="{{ route('removebanner',['id'=>$list_banner->id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <span>{{ $list_ban -> render()}}</span>
    </div>
  </div>
</div>
@endsection
