@extends('Admin.Layout.index')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card" style="margin-left: -40px; width: 60rem;">
      <div class="card-header" style="background: #4fc308;">
        <h3 class="card-title" style="color: #fff;">Danh sách bình luận</h3>
      </div>
      <!-- /.card-header -->
       <form class="form-inline mr-auto" type="get" action="{{ route('searchcomment')}}">
        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="button button1 " type="submit">Search</button>
      </form>
      <div class="card-body">
        <table class="table table-bordered">
            @csrf
          <thead>
            <tr>
              <th>#</th>
              <th>tên</th>
              <th>tân phản phẩm</th>
              <th>nội dung</th>
              <th>Trạng thái</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $head_search as $a)
            <tr>
              <td>{{$a->id}}</td>
              <td>{{$a->user->name}}</td>
              <td>{{$a->prod->pro_name}}</td>
              <td>{{$a->content}}</td>
              <td><?php
               if($a->status==0){
                ?>
                 <a href="{{route('active-comment',['id'=>$a->id])}}"><span class="fa-thumb-styling fa fa-thumbs-down" style="color: red;"></span></a>
                <?php
                 }else{
                ?>  
                <a href="{{route('unactive-comment',['id'=>$a->id])}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                
                <?php
               }
              ?>
            </td>
              <td>
                <a href="{{ route('removecomment',['id'=>$a -> id])}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');"><i class="fas fa-trash-alt"></i></a>
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
