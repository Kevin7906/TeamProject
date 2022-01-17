@extends('layouts.template')

@section('title','寄送資料')

@section('css')
<link rel="stylesheet" href="{{asset('css/step03.css')}}">
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
        <!-- 寄送資料 -->
        <div class="mt-4 pt-4">
            <form action="{{route('shopping-cart.step03-store')}}" class="paymentMethod_form-group" method="POST">
                @csrf
                <fieldset>
                    <legend>寄送資料</legend>
                    <div class="form-group">
                        <label for="name">姓名<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                            placeholder="王小明" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">電話<span class="text-danger">*</span></label>
                        <input type="tel" class="form-control" id="phone" name="phone"
                            placeholder="0912345678" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="abc123@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="address">地址<span class="text-danger">*</span></label>
                        <div class="d-flex flex-column">
                            <input type="text" class="form-control" id="address" name="address" placeholder="地址" required>
                        </div>
                    </div>
                </fieldset>
                <button id="submit-btn" hidden></button>
            </form>
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
            <li class="totalRow"><a href="#" class="btn continue" id="next">下一步</a></li>
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