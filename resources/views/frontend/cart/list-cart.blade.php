<div class="cart-table">
  <table>
    <thead>
      <tr>
        <th style="with:20%;">Image</th>
        <th class="p-name" style="with:20%;">Product Name</th>
        <th style="with:10%;">Price</th>
        <th style="with:20%;">Quantity</th>
        <th style="with:10%;">Total</th>
        <th style="with:20%;">Delete</th>
        <th style="with:20%;">Edit</th>
      </tr>

      
    </thead>
    <tbody>
      @if(Session::has("cart") != null)
      @foreach(Session::get('cart')->products as $item)
      <tr>
        <td class="cart-pic first-row"><img src="public/frontend/imgs/{{$item['productInfo']->image}}" alt=""></td>
        <td class="cart-title first-row">
          <h5>{{$item['productInfo']->pro_name}}</h5>
        </td>
        <td class="p-price first-row">{{number_format($item['productInfo']->price)}}đ</td>
        <td class="qua-col first-row">
          <div class="quantity">
            <div class="pro-qty">
             <input type="text" data-id="{{$item['productInfo']->id}}" id="quanty-item-{{$item['productInfo']->id}}" value="{{$item['quanty']}}">

           </div>
         </div>
       </td>
       <td class="total-price first-row">${{$item['price']}}</td>
       <td class="close-td"><i class="fas fa-times" onclick="DeleteItemShopCart({{$item['productInfo']->id}});"></i></td>
       <td class="close-td"><i class="far fa-save"   onclick="SaveItemShopCart({{$item['productInfo']->id}});"></i></td>
     </tr>

     @endforeach
     @endif
     <tr class="sua-xoa">
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td class="close-td del-all"><button class="btn btn-danger">xóa</button></td>
      <td class="close-td edit-all"><button class="btn btn-success">cập nhập</button></td>
    </tr>
  </tbody>
</table>
</div>

<div class="row">
  <div class="col-lg-4 offset-lg-8">
    <div class="proceed-checkout">
     @if(Session::has("cart") != null)
     <ul>
      <li class="subtotal">Subtotal <span>{{Session::get('cart')->totalQuanty}}</span></li>
      <li class="cart-total">Total <span>{{number_format(Session::get('cart')->totalPrice)}}đ</span></li>


    </ul>
    @endif
    <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
  </div>
</div>
</div>