@extends('Admin.Layout.index')
@section('content')
    <div class="row" >
  <div class="col-md-8" >
    <div class="card">
      <div class="card-header" style="background: #4fc308;color: #fff;">
        <h3 class="card-title">Phương thức thanh toán</h3>
      </div>
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
    </div>
  </div>

</div>

@endsection
