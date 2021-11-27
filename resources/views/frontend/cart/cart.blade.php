@if(Session::has("cart") != null)
<div class="select-items">
    <table>
        <tbody>
           @foreach(Session::get('cart')->products as $item)
                            <tr>
                              <td class="si-pic" style="width: 30%;"><img
                                  src="{{asset('public/frontend/imgs/'.$item['productInfo']->image)}}" alt=""></td>
                              <td class="si-text" style="width: 500%;">
                                <div class="product-selected">
                                  <p>{{number_format($item['productInfo']->price)}}đ x
                                    {{$item['quanty']}}</p>
                                  <h6>{{$item['productInfo']->pro_name}}</h6>
                                </div>
                              </td>
                              <td class="si-close" style="width: 20%;text-align: right;">
                                <i href="{{route('remove',['id'=>$item['productInfo']->id])}}" class="fas fa-times"></i>
                              </td>
                            </tr>

                            @endforeach
        </tbody>
    </table>
</div>
<div class="select-total">
    <span>total:</span>
    <h5>{{number_format(Session::get('cart')->totalPrice)}}đ</h5>
    <input hidden id="total-quanty-cart" type="number" value="{{Session::get('cart')->totalQuanty}}" >
</div>
@endif