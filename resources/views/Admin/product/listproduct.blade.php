@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card" style="margin-left: -40px; width: 60rem;padding-top: 10px;">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style="color: #fff;">Danh sách sản phẩm</h3>
      </div>
      <form class="form-inline mr-auto" type="get" action="{{ route('searchproduct')}}">
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
              <th>Tên sản phẩm</th>
              <th>Giá</th>
              <th>Ảnh</th>
              <th>Trạng thái</th>
              <th>Nội Dung</th>
              <th>Mô tả</th>
              <th>Ngày tạo</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $pro_list as $list_pro )
            <tr>
              <td>{{$list_pro->id}}</td>
              <td>{{$list_pro->pro_name}}</td>
              <td>{{$list_pro->price}}</td>
              <td>
                <img src="{{asset('storage/app/avatar/'.$list_pro->image)}}" alt="" width="100">
              </td>
              <td><?php
               if($list_pro->status==0){
                ?>
                 <a href="{{route('active-product',['id'=>$list_pro->id])}}"><span class="fa-thumb-styling fa fa-thumbs-down" style="color: red;"></span></a>
                <?php
                 }else{
                ?>  
                <a href="{{route('unactive-product',['id'=>$list_pro->id])}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                
                <?php
               }
              ?></td>
              <td>
                <button type="button" class="collapsible">...</button>
                <div class="content">
                  <p>{!!$list_pro->content!!}</p>
                </div>
              </td>
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
                        <p>{!!$list_pro->description!!}</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
            </td>
            <td>{{$list_pro->created_at}}</td>
            <td>
              <a href="{{ route('editproduct',['id'=>$list_pro -> id])}}" ><i class="fas fa-edit"></i></a>
              &nbsp;
              <a href="{{ route('removeproduct',['id'=>$list_pro -> id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>
    <span>{{ $pro_list -> render()}}</span>
  </div>
</div>
</div>
@endsection
