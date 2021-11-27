@extends('Admin.Layout.index')
@section('content')
    <div class="row" >
  <div class="col-md-8" >
    <div class="card">
      <div class="card-header" style="background: #4fc308;color: #fff;">
        <h3 class="card-title">Danh sách method</h3>
      </div>
      <form class="form-inline mr-auto" type="get" action="{{route('searchship')}}">
      <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
      <button class="button button1 " type="submit">Search</button>
  </form>
      <div class="card-body">
        <table class="table table-bordered">
             {{ csrf_field() }}
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên phương thức</th>
              <th>Trạng thái</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach( $list_ship as $value )
            <tr>
              <td>{{ $value -> id}}</td>
              <td>{{ $value -> name}}</td>
              <td>{{ $value -> status==1? 'Hiện' : 'Ẩn'}}</td>

              <td>
                <a href="{{ route('editmethod',['id'=>$value -> id])}}" ><i class="fas fa-edit"></i></a>
                &nbsp;
                <a href="{{ route('removemethod',['id'=>$value -> id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <span>{{ $list_ship -> render()}}</span>
    </div>
  </div>

</div>

@endsection
