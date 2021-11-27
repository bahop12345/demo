@extends('Admin.Layout.index')
@section('content')
    <div class="row" >
  <div class="col-md-12">
    <div class="card" style="width: 100%;margin-top: 10px;margin-left: -25px;">
      <div class="card-header" style="background: #4fc308;color: #fff;">
        <h3 class="card-title">Danh sách Admin</h3>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
             {{ csrf_field() }}
          <thead>
            <tr>
              <th>STT</th>
              <th>Email</th>
              <th>Password</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach( $list_admin as $value )
            <tr>
              <td>{{ $value -> id}}</td>
              <td>{{ $value -> email}}</td>
              <td>{!! $value -> password !!}</td>

              <td>
                <a href="{{ route('editadmin',['id'=>$value -> id])}}" ><i class="fas fa-edit"></i></a>
                &nbsp;
                <a href="{{ route('removeadmin',['id'=>$value -> id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <span>{{ $list_admin -> render()}}</span>
    </div>
  </div>

</div>

@endsection
