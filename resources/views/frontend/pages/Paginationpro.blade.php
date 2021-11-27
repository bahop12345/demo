<div class="row product">
  @foreach($product as $pr)
  <div class="col-xl-4 col-lg-6 col-sm-12  get-item">
    <div class="pro1">
      <div class="img-pro">
        <a href="{{route('product_detail',['id'=>$pr->id])}}"><img src="{{asset('public/frontend/imgs/'.$pr->image)}}" alt=""></a>
      </div>

      <div class="text-pro">
        <a href="{{route('product_detail',['id'=>$pr->id])}}"><h4>{{$pr->pro_name}}</h4></a>
        <p>{{$pr->cat->name}}</p>
        <strong>${{$pr->price}}</strong>
      </div>
      <div class="cart">
        <a onclick="AddCart({{$pr->id}})" href="javascript:"> <button class="btn">ADD TO CART<i class="fas fa-plus"></i></button></a>
      </div>
    </div>
  </div>
  @endforeach
  <div class="col-12 paginationpro"><div class="row">{!!$product->render()!!}</div></div>

</div>
