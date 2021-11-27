@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card" style="margin-left: -40px; width: 60rem;">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style="color: #fff;">Danh sách địa chỉ</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
            @csrf
          <thead>
            <tr>
              <th>#</th>
              <th>Logo</th>
              <th>Số điện thoại</th>
              <th>Email</th>
              <th>Địa chỉ</th>
              <th>Google map</th>
              <th>Trạng thái</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $contact as $contact )
            <tr>
              <td>{{$contact->id}}</td>
              <td> <img src="{{asset('storage/app/avatar/'.$contact->logo)}}" alt="" width="100"></td>
              <td>{{$contact->phone}}</td>
              <td>{{$contact->email}}</td>
              <td>{{$contact->address}}</td>
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
                        <p>{!!$contact->map!!}</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                </td>
              <td>
                <a href="{{ route('removecontact',['id'=>$contact -> id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');"><i class="fas fa-trash-alt"></i></a>
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
