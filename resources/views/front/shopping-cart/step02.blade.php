@extends('layouts.template')

@section('title','付款與運送方式')

@section('css')
<link rel="stylesheet" href="{{asset("css/step02.css")}}">
{{-- <style>
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
</style> --}}
@endsection

@section('main')
<section id="cart" class="py-5">
    <div class="container">
        <div class="card">
            <div class="card-body p-5">
                <!-- 購物車的header -->
                @include('front.shopping-cart.shopping-cart-header',['step'=>2])
                <!-- 付款方式 -->
                    <form action="{{route('shopping-cart.step02-store')}}" class="container" id="step02-form" method="POST">
                        @csrf
                        <h3 class="fs-2">付款方式</h3>
                        <div class="form-group row py-2 px-4">
                            <div class="form-check">
                                <input class="form-check-input m-r-3" type="radio" name="payment" id="credit-card" value="0" checked>
                                <label class="form-check-label fs-3" for="credit-card">貨到付款</label>
                            </div>
                        </div>
                        <h3 class="fs-2">運送方式</h3>
                        <div class="form-group row py-2 px-4">
                            <div class="form-check">
                                <input class="form-check-input m-r-3" type="radio" name="shipment" id="home" value="0" checked>
                                <label class="form-check-label fs-3" for="home">宅配到府</label>
                            </div>                          
                        </div>
                        <button id="submit-btn" hidden></button>
                    </form>
                <!-- 購物車的footer -->
                {{-- @include('front.shopping-cart.shopping-cart-footer',['step'=>2]) --}}
                <div class="subtotal cf">
                    <ul>
                      <li class="totalRow"><span class="label">數量</span><span class="value" id="qty">{{$totalQty ??
                                  \Cart::getTotalQuantity()}}</span></li>
                      <li class="totalRow"><span class="label">小計</span><span class="value"
                                  id="subtotal">${{number_format($total ?? \Cart::getSubTotal())}}</span></li>
                      <li class="totalRow"><span class="label">運費</span><span class="value" id="change">$60</span></li>
                      <li class="totalRow final"><span class="label">總計</span><span class="value"
                                  id="total">${{number_format($subtotal ?? \Cart::getTotal()+60)}}</span></li>
                      <li class="totalRow"><button class="btn continue" id="next">下一步</button></li>
                    </ul>
                </div>       
            </div>
        </div>
    </div>
</section>
</main>
@endsection

@section('js')
<script>
    const nextElement = document.querySelector('#next');
    nextElement.addEventListener('click',function() {
        document.querySelector('#submit-btn').click();
    });
</script>
@endsection