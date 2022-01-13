@extends('layouts.template')

@section('title','確認購物車')

@section('css')
<link rel="stylesheet" href="{{asset('css/checkout.css')}}">
<style>
    body{
        font-size: 18px;
    }
    .img{
        width: 80px;
        height: 80px;
        background-size: cover;
        background-position: center;
        border-radius: 50%;
        margin-right: 10px;
    }
    .order-item-price>span{
        display: inline-block;
        text-align: end;
        min-width: 70px;
        font-size: 18px !important;
    }

    .delete-btn{
        margin-right: 5px;
        cursor: pointer;
    }
</style>
@endsection

@section('main')
<section id="cart" class="py-5">
    <div class="container">
        <div class="card">
            <div class="card-body p-5">
                <!-- 購物車的header -->
                @include('front.shopping-cart.shopping-cart-header',['step'=>1])
                <!-- 訂單明細 -->
                <div class="mt-4 pt-4">
                    <h3 class="mb-4">訂單明細</h3>
                    @foreach ($items as $item)
                    <div class="d-flex justify-content-between align-items-center mt-4 pt-4 order-item">
                        <div class="d-flex align-items-center order-item-info">
                            <div class="delete-btn" data-id="{{$item->id}}">X</div>
                            <div class="img" 
                            style="background-image: url('{{Storage::url($item->attributes->image_url)}}')"></div>
                            <div>
                                <p>{{$item->name}}</p>
                            </div>
                        </div>
                        <div class="order-item-price item" data-id="{{$item->id}}">
                            <button type="button" class="minus">-</button>
                            <input type="number" class="qty" value="{{$item->quantity}}">
                            <button type="button" class="plus">+</button>
                            <span class="item-total" data-single="{{$item->price}}">${{number_format($item->price*$item->quantity)}}</span>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
                <!-- 購物車的footer -->
                @include('front.shopping-cart.shopping-cart-footer',['step'=>1])
            </div>
        </div>
    </div>
</section>


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
                const priceElement = itemElement.querySelector('.item-total');
                totalQty += Number(qtyElement.value);
                subtotal += qtyElement.value * priceElement.getAttribute('data-single');
            });
            total = charge + subtotal;

            orderQtyElement.textContent = totalQty;
            ordersubtotalElement.textContent = '\$${subtotal.toLocaleString()}'
            orderTotalElement.textContent = '\$${total.toLocaleString()}'
        }
        function itemQtyCalc(element,compute) {
            const qtyElement = element.parentElement.querySelector('.qty');
            let answer = 0;
            if (compute == 'minus') 
                answer = Number(qtyElement.value) -1;
            else 
                answer = Number(qtyElement.value) +1;
            qtyElement.value = answer < 1 ? 1:answer;
        }
        // 商品數量價格計算
        function itemTotalCalc(element) {
            const priceElement = element.parentElement.querySelector('.item-total');
            const qtyElement = element.parentElement.querySelector('.qty');
            let price = priceElement.getAttribute('data-single');
            let qty = qtyElement.value;
            let total = price * qty;
            priceElement.textContent = `\$${total}`;
        }
        const minusElements = document.querySelectorAll('.minus');
        const plusElements = document.querySelectorAll('.plus');
        minusElements.forEach(function(minusElement) {
            minusElement.addEventListener('click',function() {
                itemQtyCalc(this,'minus');
                itemTotalCalc(this);
            });
        });
        plusElements.forEach(function(plusElement) {
            plusElement.addEventListener('click',function() {
                itemQtyCalc(this,'plus');
                itemTotalCalc(this);
            });
        });
    </script>
@endsection