@extends('layouts.template')

@section('title','確認購物車')
    
@section('css')
<link rel="stylesheet" href="{{asset('css/step01.css')}}">
<style>
  .delete-btn {
        cursor: pointer;
  }
</style>
@endsection

@section('main')
<!-- 購物車的header -->
@include('front.shopping-cart.shopping-cart-header')
<!-- 訂單明細 -->
<main style="margin-bottom: 300px; z-index: 10; position:relative; background:#FFFFFB;">
  <div class="wrap cf">
        <div class="heading cf">
          <h1>我的購物車</h1>
          <a href="{{ route('donut.list') }}" class="continue">繼續選購</a>
        </div>
        <div class="cart">
            <ul class="cartWrap">
                @foreach ($items as $item)
                <li class="items odd">
                    <div class="infoWrap">
                        <div class="cartSection">
                            <img src="{{ Storage::url($item->attributes->image_url)}}" alt="" class="itemImg"/>
                            <h3>{{$item->name}}</h3>
                            <div class="order-item-price item" data-id="{{$item->id}}">
                                <div class="minus mr-2" type="button">
                                    <i class="fas fa-angle-left"></i>
                                </div>
                                <input class="qty mr-2" type="number" style="margin: 0" value="{{$item->quantity}}">
                                <div class="plus mr-2" type="button">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                                {{-- <span class="item-total">X15</span> --}}
                            </div>
                        </div>
                        <div class="prodTotal cartSection">
                            <p class="item-total" data-single="{{$item->price}}">${{number_format($item->price*$item->quantity)}}</p>
                        </div>
                        <div class="cartSection removeWrap">
                            <div data-id="{{$item->id}}" class="remove delete-btn">X</div>
                        </div>
                      </div>
                </li>
                <hr>
                @endforeach
            </ul>
        </div>

        <div class="subtotal cf">
          <ul>
            <li class="totalRow"><span class="label">數量</span><span class="value" id="qty">{{$totalQty ??
                        \Cart::getTotalQuantity()}}</span></li>
            <li class="totalRow"><span class="label">小計</span><span class="value"
                        id="subtotal">${{number_format($total ?? \Cart::getSubTotal())}}</span></li>
            <li class="totalRow"><span class="label">運費</span><span class="value" id="change">$60</span></li>
            <li class="totalRow final"><span class="label">總計</span><span class="value"
                        id="total">${{number_format($subtotal ?? \Cart::getTotal()+60)}}</span></li>
            <li class="totalRow"><a href="{{route('shopping-cart.step02')}}" class="btn continue">下一步</a></li>
          </ul>
        </div>   
    </div>
  </div>
</main>
@endsection

@section('js')
<script>
  function orderTotalCalc() {
      const itemElements = document.querySelectorAll('.item');
      const orderQtyElement = document.querySelector('#qty');
      const ordersubtotalElement = document.querySelector('#subtotal');
      const orderTotalElement = document.querySelector('#total');
      let totalQty = 0;
      let subtotal = 0;
      let charge = 60;
      let total = 0;
      itemElements.forEach(function (itemElement) {
          const qtyElement = itemElement.querySelector('.qty');
          const priceElement = itemElement.parentElement.parentElement.querySelector('.item-total');
          totalQty += Number(qtyElement.value);
          subtotal += qtyElement.value * priceElement.getAttribute('data-single');
      });
      total = charge + subtotal;

      orderQtyElement.textContent = totalQty;
      ordersubtotalElement.textContent = `\$${subtotal.toLocaleString()}`
      orderTotalElement.textContent = `\$${total.toLocaleString()}`
  }
  function itemQtyCalc(element,compute) {
      const itemElement = element.parentElement;
      const qtyElement = itemElement.parentElement.querySelector('.qty');
      let donutId = itemElement.getAttribute('data-id');
      let qty = Number(qtyElement.value) + compute;
      qty = qty < 1 ? 1: qty;

      let forData = new FormData();
      forData.append('_token','{{csrf_token()}}');
      forData.append('id',donutId);
      forData.append('qty',qty);
      let url = '{{ route('shopping-cart.update') }}';
      fetch(url,{
        'method':'post',
        'body':forData
      }).then(function (response) {
        return response.json();
      }).then(function (item) {
        if(item.quantity){
          qtyElement.value = item.quantity;
          itemTotalCalc(element);
        }
      });
  }
  // 商品數量價格計算
  function itemTotalCalc(element) {
      const priceElement = element.parentElement.parentElement.parentElement.querySelector('.item-total');
      const qtyElement = element.parentElement.querySelector('.qty');
      let price = priceElement.getAttribute('data-single');
      let qty = qtyElement.value;
      let total = price * qty;
      priceElement.textContent = `\$${total.toLocaleString()}`;
      orderTotalCalc()
  }
  const minusElements = document.querySelectorAll('.minus');
  const plusElements = document.querySelectorAll('.plus');
  const deleteElements = document.querySelectorAll('.delete-btn');
  minusElements.forEach(function(minusElement) {
      minusElement.addEventListener('click',function() {
          itemQtyCalc(this,-1);
      });
  });
  plusElements.forEach(function(plusElement) {
      plusElement.addEventListener('click',function() {
          itemQtyCalc(this,1);
      });
  });

  deleteElements.forEach(function(deleteElement) {
      deleteElement.addEventListener('click',function(){
        console.log(deleteElements);
        Swal.fire({
                title: '是否刪除該商品?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '是',
                cancelButtonText: '否',
        }).then((result) => {
            if(result.isConfirmed){
              let productId = this.getAttribute('data-id');
              let deleteBtn = this;
              let formData = new FormData();
              formData.append('_token','{{csrf_token()}}');
              formData.append('id',productId);
              let url = '{{ route('shopping-cart.delete') }}';
                fetch(url,{
                    'method':'post',
                    'body':formData
                }).then(function (response) {
                    return response.text();
                }).then(function (data) {
                    if(data == 'success'){
                        deleteBtn.parentElement.parentElement.remove();
                        orderTotalCalc();
                        Swal.fire(
                            '刪除成功!'
                        )
                    }
                });
            }
        })
      });
  });
  // 重新整理後更新
  orderTotalCalc();
</script>
@endsection