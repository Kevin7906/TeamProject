@extends('layouts.template')

@section('title','確認購物車')
    
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.3/sweetalert2.min.css" integrity="sha512-jtQXcnq6H9BVx+dOsdudNCZmNe2hBMqcPpnVgeZcV9L3615F4+QMQebbWW9TV2otOSk/kQgum0MpWefB3uL3pg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
    <link rel="stylesheet" href="{{asset('css/shopping-cart.css')}}">
    <style>
        .delete-btn {
            cursor: pointer;
        }

        
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}

html {
  line-height: 1;
}

ol, ul {
  list-style: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

caption, th, td {
  text-align: left;
  font-weight: normal;
  vertical-align: middle;
}

q, blockquote {
  quotes: none;
}
q:before, q:after, blockquote:before, blockquote:after {
  content: "";
  content: none;
}

a img {
  border: none;
}

article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
  display: block;
}

* {
  box-sizing: border-box;
}

body {
  color: #333;
}

img {
  max-width: 100%;
}

.cf:before, .cf:after {
  content: " ";
  display: table;
}

.cf:after {
  clear: both;
}

.cf {
  *zoom: 1;
}

.wrap {
  width: 75%;
  max-width: 960px;
  margin: 0 auto;
  padding: 5% 0;
  margin-bottom: 5em;
}

.projTitle {
  font-weight: bold;
  text-align: center;
  font-size: 2em;
  padding: 1em 0;
  border-bottom: 1px solid #dadada;
  letter-spacing: 3px;
  text-transform: uppercase;
}
.projTitle span {
  font-weight: normal;
  font-style: italic;
  text-transform: lowercase;
  color: #777;
}

.heading {
  padding: 1em 0;
  border-bottom: 1px solid #D0D0D0;
}
.heading h1 {
  font-size: 2em;
  float: left;
}
.heading a.continue:link, .heading a.continue:visited {
  text-decoration: none;
  letter-spacing: -.015em;
  font-size: .75em;
  padding: 1em;
  color: #fff;
  background: #869dab;
  font-weight: bold;
  border-radius: 50px;
  float: right;
  text-align: right;
  transition: all 0.25s linear;
}
.heading a.continue:after {
  content: "\276f";
  padding: .5em;
  position: relative;
  right: 0;
  transition: all 0.15s linear;
}
.heading a.continue:hover, .heading a.continue:focus, .heading a.continue:active {
  background: #847072;
}
.heading a.continue:hover:after, .heading a.continue:focus:after, .heading a.continue:active:after {
  right: -10px;
}

.tableHead {
  display: table;
  width: 100%;
  font-size: .75em;
}
.tableHead li {
  display: table-cell;
  padding: 1em 0;
  text-align: center;
}
.tableHead li.prodHeader {
  text-align: left;
}

.cart {
  padding: 1em 0;
}
.cart .items {
  display: block;
  width: 100%;
  padding: 1.5em;
  border-bottom: 1px solid #fafafa;
}
.cart .items.even {
  background: #fafafa;
}
.cart .items .infoWrap {
  display: table;
  width: 100%;
}
.cart .items .cartSection {
  display: table-cell;
  vertical-align: middle;
}
.cart .items .cartSection .itemNumber {
  font-size: .75em;
  color: #777;
  margin-bottom: .5em;
}
.cart .items .cartSection h3 {
  font-size: 1em;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: .025em;
}
.cart .items .cartSection p {
  display: inline-block;
  font-size: .85em;
  color: #777777;
}
.cart .items .cartSection p .quantity {
  font-weight: bold;
  color: #333;
}
.cart .items .cartSection p.stockStatus {
  color: #5eaa5f;
  font-weight: bold;
  padding: .5em 0 0 1em;
  text-transform: uppercase;
}
.cart .items .cartSection p.stockStatus.out {
  color: #ee3239;
}
.cart .items .cartSection .itemImg {
  width: 4em;
  float: left;
}
.cart .items .cartSection.qtyWrap, .cart .items .cartSection.prodTotal {
  text-align: center;
}
.cart .items .cartSection.qtyWrap p, .cart .items .cartSection.prodTotal p {
  font-weight: bold;
  font-size: 1.25em;
}
.cart .items .cartSection input.qty {
  width: 2em;
  text-align: center;
  font-size: 1em;
  padding: .25em;
  margin: 1em .5em 0 0;
}
.cart .items .cartSection .itemImg {
  width: 8em;
  display: inline;
  padding-right: 1em;
}

.order-item-price {
  display: flex;
  align-items: center;
  margin-top: 10px;
}

.order-item-price i {
  font-size: 24px;
}

.special {
  display: block;
}
.special .specialContent {
  padding: 1em 1em 0;
  display: block;
  margin-top: .5em;
  border-top: 1px solid #dadada;
}
.special .specialContent:before {
  content: "\21b3";
  font-size: 1.5em;
  margin-right: 1em;
  color: #6f6f6f;
}

a.remove {
  text-decoration: none;
  color: #ffffff;
  font-weight: bold;
  background: #e0e0e0;
  padding: .5em;
  font-size: .75em;
  display: inline-block;
  border-radius: 100%;
  line-height: .85;
  transition: all 0.25s linear;
}
a.remove:hover {
  background: #f30;
}

.promoCode {
  border: 2px solid #efefef;
  float: left;
  width: 35%;
  padding: 2%;
}
.promoCode label {
  display: block;
  width: 100%;
  font-style: italic;
  font-size: 1.15em;
  margin-bottom: .5em;
  letter-spacing: -.025em;
}
.promoCode input {
  width: 85%;
  font-size: 1em;
  padding: .5em;
  float: left;
  border: 1px solid #dadada;
}
.promoCode input:active, .promoCode input:focus {
  outline: 0;
}
.promoCode a.btn {
  float: left;
  width: 15%;
  padding: .75em 0;
  border-radius: 0 1em 1em 0;
  text-align: center;
  border: 1px solid #869dab;
}
.promoCode a.btn:hover {
  border: 1px solid #847072;
  background: #847072;
}

.btn:link, .btn:visited {
  text-decoration: none;
  letter-spacing: -.015em;
  font-size: 1em;
  padding: 1em 3em;
  color: #fff;
  background: #869dab;
  font-weight: bold;
  border-radius: 50px;
  float: right;
  text-align: right;
  transition: all 0.25s linear;
}
.btn:after {
  content: "\276f";
  padding: .5em;
  position: relative;
  right: 0;
  transition: all 0.15s linear;
}
.btn:hover, .btn:focus, .btn:active {
  background: #847072;
}
.btn:hover:after, .btn:focus:after, .btn:active:after {
  right: -10px;
}
.promoCode .btn {
  font-size: .85em;
  padding: .5em 2em;
}

/* TOTAL AND CHECKOUT  */
.subtotal {
  float: right;
  width: 35%;
}
.subtotal .totalRow {
  padding: .5em;
  text-align: right;
}
.subtotal .totalRow.final {
  font-size: 1.25em;
  font-weight: bold;
}
.subtotal .totalRow span {
  display: inline-block;
  padding: 0 0 0 1em;
  text-align: right;
}
.subtotal .totalRow .label {
  font-size: .85em;
  text-transform: uppercase;
  color: #777;
}
.subtotal .totalRow .value {
  letter-spacing: -.025em;
  width: 35%;
}

@media only screen and (max-width: 39.375em) {
  .wrap {
    width: 98%;
    padding: 2% 0;
  }

  .projTitle {
    font-size: 1.5em;
    padding: 10% 5%;
  }

  .heading {
    padding: 1em;
    font-size: 90%;
  }

  .cart .items .cartSection {
    width: 90%;
    display: block;
    float: left;
  }
  .cart .items .cartSection.qtyWrap {
    width: 10%;
    text-align: center;
    padding: .5em 0;
    float: right;
  }
  .cart .items .cartSection.qtyWrap:before {
    content: "QTY";
    display: block;
    font-family: "Montserrat", sans-serif;
    padding: .25em;
    font-size: .75em;
  }
  .cart .items .cartSection.prodTotal, .cart .items .cartSection.removeWrap {
    display: none;
  }
  .cart .items .cartSection .itemImg {
    width: 25%;
  }

  .promoCode, .subtotal {
    width: 100%;
  }

  a.btn.continue {
    width: 100%;
    text-align: center;
  }
}

    </style>
@endsection

@section('main')
@include('front.shopping-cart.shopping-cart-header')
    <main style="margin-bottom: 300px; z-index: 10; position:relative; background:#FFFFFB;">
        <div class="wrap cf">
            <div class="heading cf">
              <h1>我的購物車</h1>
              <a href="#" class="continue">繼續選購</a>
            </div>
            <div class="cart">
              <ul class="cartWrap">
                <li class="items odd">
                  <div class="infoWrap">
                    <div class="cartSection">
                      <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />
                      <h3>商品名稱 1</h3>
                        <div class="order-item-price item" >
                          <div class="minus mr-2" type="button">
                            <i class="fas fa-angle-left"></i>
                          </div>
                          <input class="qty mr-2" type="number" style="margin: 0">
                          <div class="plus mr-2" type="button">
                            <i class="fas fa-angle-right"></i>
                          </div>
                          <span class="item-total" > x5.00</span>
                      </div>
                    </div>
                    <div class="prodTotal cartSection">
                      <p>$15.00</p>
                    </div>
                    <div class="cartSection removeWrap">
                      <a href="#" class="remove">x</a>
                    </div>
                  </div>
                </li>

                <li class="items even">
                  <div class="infoWrap">
                    <div class="cartSection">
                      <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />
                      <h3>商品名稱 2</h3>
                      <div class="order-item-price item" >
                        <div class="minus mr-2" type="button">
                          <i class="fas fa-angle-left"></i>
                        </div>
                        <input class="qty mr-2" type="number" style="margin: 0">
                        <div class="plus mr-2" type="button">
                          <i class="fas fa-angle-right"></i>
                        </div>
                        <span class="item-total" > x15.00</span>
                    </div>
                    </div>
                    <div class="prodTotal cartSection">
                      <p>$15.00</p>
                    </div>
                    <div class="cartSection removeWrap">
                      <a href="#" class="remove">x</a>
                    </div>
                  </div>
                </li>
            </div>
          
            <div class="subtotal cf">
              <ul>
                <li class="totalRow"><span class="label">數量</span><span class="value">4</span></li>
                <li class="totalRow"><span class="label">小計</span><span class="value">$35.00</span></li>
                <li class="totalRow"><span class="label">運費</span><span class="value">$5.00</span></li>
                <li class="totalRow final"><span class="label">總計</span><span class="value">$40.00</span></li>
                <li class="totalRow"><a href="#" class="btn continue">下一步</a></li>
              </ul>
            </div>
            <div>
              <div></div>
            </div>
        </div>
    </main>
@endsection

@section('js')
@endsection