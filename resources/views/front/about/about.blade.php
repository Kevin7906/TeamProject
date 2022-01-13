@extends('layouts.template')
@section('title','關於一伴')

@section('css')
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>
    body {
            background-color: #FCFAF2;
        }

    .main {
        background-color: #FCFAF2;
        margin-bottom: 300px;
    }

    .video-player {
        position: relative;
        height: 400px;
        min-width: 600px;
        margin: 150px 0;
        background: #FCFAF2;
    }

    .video-player video {
        position: absolute;
        width: 100%;
    }

    .mask {
        position: absolute;
        transform: translate(-10%, -20%);
        width: 140%;
        z-index: 20;
        user-select: none;
    }
</style>
@endsection

@section('main')
<section class="main">
    <div class="container d-flex flex-wrap col-10 justify-content-center">
        <h2 class="mb-5">這行我也不知道要放什麼</h2>
        <div class="col-10 d-flex justify-content-center align-items-center mb-5">
            <img data-aos="fade-up"
            data-aos-duration="3000" class="col-6 me-3" src="https://threetimescoffee.jp/images/about_img01.png" style="width: 400px">
            <div class="col-6 ms-3">
                <h3>緣</h3>
                <p>
                    一人一伴<br>
                    兩人共用一撇，象徵「共有」也傳遞「伴」的概念<br>
                    -<br>
                    每個人的心 生下來都只有一半<br>
                    在尋找伴的同時<br>
                    這個伴，<br>
                    我們可以是 夥伴，家人，寵物，朋友…<br>
                    任何一個能夠陪伴你的人事物<br>
                    「一人一伴」這個名字<br>
                    希望能夠傳遞給大家一份陪伴的溫暖<br>
                    有你的分享 才會超級好吃<br>
                    -<br>
                    一人一伴即將與你們相見，<br>
                    帶著你的「伴」一起來玩吧
                </p>
            </div>
        </div>
        <div class="col-10 d-flex align-items-center mb-5">
            <div class="col-6 me-2">
                <h3>伴</h3>
                <p>
                    我們用心對待您以及您的另一伴，<br>
                    也希望您能用心的對待牠。<br>
                    -<br>
                    對您來說，寵物只是你生命中的一小部份。<br>
                    但是對寵物來說，您卻是牠生命中的全部。<br>
                </p>
            </div>
            <img data-aos="fade-up"
            data-aos-duration="3000" class="col-6 ms-2" src="https://clairetila.com/wp-content/uploads/%E8%B2%93%E8%82%A5%E5%92%96%E5%95%A1%E8%81%BD18.jpg" style="width: 400px">
        </div>
        <div class="col-10 d-flex align-items-center mb-5">
            <img data-aos="fade-up"
            data-aos-duration="3000" class="col-3 me-1" src="https://threetimescoffee.jp/images/about_img03.png" style="width: 200px">
            <img data-aos="fade-up"
            data-aos-duration="3000" class="col-3 ms-1" src="https://threetimescoffee.jp/images/about_img04.png" style="width: 200px">
            <div class="col-6 ms-2"><p>1.
                その日の気持ちに寄り添ったコーヒーを
                気持ちを後押ししたり、誰かと出会うきっかけになったり。
                1日のはじまりや昼下がりに淹れたてのコーヒーを。その日の気持ちに寄り添ったコーヒーを 気持ちを後押ししたり、誰かと出会うきっかけになったり。 1日のはじまりや昼下がりに淹れたてのコーヒーを。</p></div>
        </div>
        <div class="container d-flex justify-content-center align-items-center">
            <div class="video-player">
                <video src="{{asset('images/watch.mp4')}}" autoplay loop muted preload="auto" type="mp4"></video>
                <img src="{{asset('images/tv2.png')}}" alt="" class="mask">
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
@endsection