@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card" style="margin-left: -40px; width: 60rem;padding-top: 10px;">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style="color: #fff;">Danh sách tài khoản người dùng</h3>
    </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table class="table table-bordered">
        @csrf
        <thead>
            <tr>
              <th>Tên tài khoản</th>
              <th>SDT</th>
              <th>Email</th>
              <th>Mật khẩu</th>
              <th style="text-align: center;">Xóa</th>
          </tr>
      </thead>
      <tbody>
        @foreach( $user as $value )
        <tr>
          <td>{{$value->name}}</td>
          <td>{{$value->phone}}</td>
          <td>{{$value->email}}</td>
          <td>{{$value->password}}</td>
        <td style="text-align: center;">
            <a href="{{ route('remove_user',$value->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');"><i class="fas fa-trash-alt"></i></a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>

</div>
  {{ $user->render()}}
</div>
</div>
</div>

@endsection


