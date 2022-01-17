@extends('layouts.template')

@section('title','付款與運送方式')

@section('css')
<link rel="stylesheet" href="{{asset("css/step02.css")}}">

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
        <!-- 付款方式 -->
        <form action="{{route('shopping-cart.step02-store')}}" class="container" id="step02-form" method="POST">
            @csrf
            <h3 class="fs-2">付款方式</h3>
            <div class="form-group row py-2 px-4">
                <div class="form-check">
                    <input class="form-check-input m-r-3" type="radio" name="payment" id="cvs-code" value="2" checked>
                    <label class="form-check-label fs-3" for="cvs-code">貨到付款(現金)</label>
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
    const nextElement = document.querySelector('#next');
    nextElement.addEventListener('click',function() {
        document.querySelector('#submit-btn').click();
    });
</script>
@endsection