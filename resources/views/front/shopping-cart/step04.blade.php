@extends('layouts.template')

@section('title','完成訂購')

@section('css')
<link rel="stylesheet" href="{{asset('css/step04.css')}}">
@endsection

@section('main')
<!-- 購物車的header -->
@include('front.shopping-cart.shopping-cart-header')
<!-- 訂單 -->
<main style="margin-bottom: 300px; z-index: 10; position:relative; background:#FFFFFB;">
    <div class="wrap cf">
        <div class="heading cf">
          <h1>我的購物車</h1>
          <a href="{{ route('donut.list') }}" class="continue">繼續選購</a>
        </div>
        <!-- 完成訂購 -->
        <div class="mt-4 pt-4">
            <h1 class="text-center font-weight-bold">訂單成立</h1>
            <!-- 訂單明細 -->
            <div class="order_detail">
                <h3 class="mb-4">訂單明細</h3>
                @php
                    $totalQty = 0;
                    $subtotal = 0;
                @endphp
                @foreach ($order->orderDetails as $orderDetail)
                @php
                    $totalQty += $orderDetail->qty;
                    $totalPrice = $orderDetail->price;
                    $subtotal += $totalPrice;
                @endphp
                <div class="d-flex justify-content-between align-items-center mt-4 pt-4 order-item">
                    <div class="d-flex align-items-center order-item-info">
                        <div class="img" style="background-image: url('{{Storage::url($orderDetail->image_url)}}')"></div>    
                        <div>
                        <p>{{$orderDetail->name}}</p>
                        </div>
                    </div>
                    <div class="order-item-price d-flex align-items-center">
                        <h5>數量:{{$orderDetail->qty}}</h5>
                        <span>${{number_format($totalPrice)}}</span>
                    </div>
                </div>
                <hr>
                @endforeach
            </div>
            <!-- 寄送資料 -->
            <div class="mt-4 pt-4 send_information">
                <h3>寄送資料</h3>
                <div class="d-flex ml-2 mt-2 pt-3">
                    <label class="name">姓名:</label>
                    <div class="checkout4_name infor_text">{{$order->name}}</div>
                </div>
                <div class="d-flex ml-2 mt-2 pt-3">
                    <label class="phoneNumber">電話:</label>
                    <div class="checkout4_phoneNumber infor_text">{{$order->phone}}</div>

                </div>
                <div class="d-flex ml-2 mt-2 pt-3">
                    <label class="email">Email</label>
                    <div class="checkout4_email infor_text">{{$order->email}}</div>
                </div>
                <div class="d-flex ml-2 mt-2 pt-3">
                    <label class="city">地址:</label>
                    <div class="checkout4_city infor_text">{{$order->address}}</div>
                </div>
            </div>
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
            <li class="totalRow"><a href="{{route('donut.list')}}" class="btn continue">返回首頁</a></li>
          </ul>
        </div>   
    </div>
</main>
@endsection

@section('js')
@endsection