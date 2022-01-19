@extends('layouts.template')

@section('title','一人一伴')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
<style>
    main {
        background: #fffffb;
    }
</style>
@endsection

@section('main')
     <!-- 上方圖片 -->
     <section id="banner">
        <div class="img">
            <img src="https://omofood.com/wp-content/uploads/20210112210740_96.jpg" alt="">
        </div>
        <div class="text">
            <div class="text-p">
                <p class="ml3">眾裡尋他千百度，</p> 
                <p class="ml4">驀然回首，</p> 
                <p class="ml5">那人卻在燈火闌珊處。</p> 
                <p class="ml6 .p2">－－辛棄疾</p>
            </div>
        </div>
    </section>

    <!-- 關於一伴 -->
    <section id="about">
        <div class="about-img">
            <img src="https://cindypark.cc/wp-content/uploads/2020/09/1599268054-447764780-g.jpg" alt="">
        </div>
        <div class="about-content">
            <div class="about-content-detail">
                <h2>「伴」</h2>
                <p>
                    好吃的東西 就應該一人一半<br>
                    一個人<br>
                    或許很滿足<br>
                    兩個人<br>
                    彼此都能感到其中的幸福<br>
                    「伴」就是一人一半，湊在一起才完整<br>
                </p>
            </div>
        </div>
    </section>

    <!-- 食材介紹 -->
    <section>
        <div class="ingredients">
            <img src="{{asset('images/index-background.jpeg')}}" alt="">
        </div>
    </section>

    <!-- IG 跑馬燈 -->
    <section id="marquee">
        <div class="view">
            <div class="pic-container">
                <div class="pic pic01">
                    <img src="https://scontent.frmq2-2.fna.fbcdn.net/v/t39.30808-6/270226003_2744483509187824_8075544928197540245_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=tD8TK-siAK0AX8xmllt&_nc_ht=scontent.frmq2-2.fna&oh=00_AT9hbQW8YtBCDe0xEuBkw0ALHBnvcDA77vJHokkwfS6wzg&oe=61EB5FB1" alt="" />
                </div>
                <div class="pic pic02">
                    <img src="https://scontent.frmq2-2.fna.fbcdn.net/v/t39.30808-6/266869983_2728634480772727_7878632438532399085_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=TB9VOhKx5WMAX8WdE1p&_nc_ht=scontent.frmq2-2.fna&oh=00_AT9c7_D8wP_c2XfMg1rgTnSac0TzwgO_kt4dvfPArsMkLw&oe=61EB8B3F" alt="" />
                </div>
                <div class="pic pic03">
                    <img src="https://scontent.frmq2-1.fna.fbcdn.net/v/t39.30808-6/262019392_2721590004810508_6572109731237312142_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=ijndFiJKP20AX_gKCV2&_nc_ht=scontent.frmq2-1.fna&oh=00_AT84hBsdv2Ev7yB_nAAZYcT3QPRmQr8lcFR1B-GtzYFIBQ&oe=61EBF418" alt="" />
                </div>
                <div class="pic pic01">
                    <img src="https://scontent.frmq2-2.fna.fbcdn.net/v/t39.30808-6/245384543_2686644474971728_4752991163201298754_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=HsaB6KoY5SIAX-GKhg7&tn=aA3LzmaFlUPnbe1m&_nc_ht=scontent.frmq2-2.fna&oh=00_AT8KDJP93LBeuwUSb2_G_nIcLqB2c-c83Xw50g4ZmlilpQ&oe=61ECBACE" alt="" />
                </div>
                <div class="pic pic02">
                    <img src="https://scontent.frmq2-2.fna.fbcdn.net/v/t39.30808-6/243961901_2683004675335708_6717456387952502252_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=kqDA1xIDQAEAX--4nk0&_nc_ht=scontent.frmq2-2.fna&oh=00_AT_Y-3DUgmIHobF5M5e_DwldAPDLuAAxf29k4Qwj__N0zA&oe=61EC99AE" alt="" />
                </div>
                <div class="pic pic03">
                    <img src="https://scontent.frmq2-2.fna.fbcdn.net/v/t39.30808-6/206519333_2618770058425837_7009557871633047495_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=3TsXl2it0Q4AX9bb5NS&_nc_ht=scontent.frmq2-2.fna&oh=00_AT-XCBvxYbMLB2ijQ7MoYAmRyvmHi0IdK_BpUNznRHwtIg&oe=61EBB436" alt="" />
                </div>
                <div class="pic pic01">
                    <img src="https://scontent.frmq2-1.fna.fbcdn.net/v/t1.6435-9/196322203_2614852532150923_4046558925358210587_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=L8PmwHwIfD0AX8rTZgR&tn=aA3LzmaFlUPnbe1m&_nc_ht=scontent.frmq2-1.fna&oh=00_AT-4T4de5dfwKBn0x_f-Z5O_JtRcNFqwYtIIwF99AjHwRA&oe=620BA246" alt="" />
                </div>
                <div class="pic pic02">
                    <img src="https://scontent.frmq2-1.fna.fbcdn.net/v/t1.6435-9/120634695_2437782326524612_1860820360676784313_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=sQkjpzb77w4AX-TBVhX&_nc_ht=scontent.frmq2-1.fna&oh=00_AT9N0tX9x7X803GYtQPysRgJAi-y-AjkJUoVRV8hv6Flqw&oe=620E8EDA" alt="" />
                </div>
                <div class="pic pic03">
                    <img src="https://scontent.frmq2-1.fna.fbcdn.net/v/t1.6435-9/185295847_2591096657859844_97641736378999484_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=rRO7NWCxSH8AX_YDIaf&_nc_ht=scontent.frmq2-1.fna&oh=00_AT99j3VpnluSUI_S9kOI6yG-Yz33VKZsSc-jY27AGixDNw&oe=620DABDE" alt="" />
                </div>
                <div class="pic pic01">
                    <img src="https://scontent.frmq2-1.fna.fbcdn.net/v/t1.6435-9/171770306_2570340103268833_6441646055919330019_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=ZRKw8jUyp0gAX_AanJj&_nc_oc=AQl76Q8md27m7cM6XqZJDdyAMaU9tw-42o3PkrE2-9PLNP2uWySv_dUCT1B-zsobwaU&_nc_ht=scontent.frmq2-1.fna&oh=00_AT_zG2npaJl9iQLPgxlKZ1kV9TvG-Hq5E6h-tvnQF5JZaQ&oe=620C8612" alt="" />
                </div>
            </div>
        </div>
    </section>

    <!-- 線上預約 -->
    <div class="reservation">
        <div class="container">
            <div class="row book-info">
                <div class="col-6 book-left wow fadeInLeft animated" data-wow-delay=".5s">
                    <img src="http://www.innk.com.tw/wp-content/uploads/2018/12/1_9UJO_sPcJAF0mVzN1ItqtQ.jpeg" alt="">
                </div>
                <div class="col-6 book-right wow fadeInRight animated" data-wow-delay=".5s">
                    <h2 class="title wow fadeInDown animated" data-wow-delay=".5s">線上預約</h2>
                    <form>
                        <label for="date" class="wow fadeInDown animated" data-wow-delay=".5s">日期 :</label>
                        <input id="date" name="date" class="wow fadeInDown animated" data-wow-delay=".5s" type="date" value="2022-01-20" min="2022-01-20" max="2022-06-20" required>
                        <div class="form-left wow fadeInDown animated" data-wow-delay=".7s">
                            <label>人數 :</label>
                            <select class="form-control" required>
                                <option>1 人</option>
                                <option>2 人</option>
                                <option>3 人</option>
                                <option>4 人</option>
                            </select>
                        </div>
                        <div class="form-right wow fadeInDown animated" data-wow-delay=".7s">
                            <label>時間 :</label>
                            <input type="time" value="09:00" min="09:00" max="14:00" required>
                        </div>
                        <div class="clearfix"> </div>
                        <label class="wow fadeInDown animated" data-wow-delay=".9s">聯絡電話 :</label>
                        <input class="wow fadeInDown animated" data-wow-delay=".9s" type="text"
                            onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contact';}"
                            required="">
                        <input type="submit" value="預訂">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script>
    var textWrapper = document.querySelector('.ml3');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    
    anime.timeline({loop: true})
    .add({
        targets: '.ml3 .letter',
        opacity: [0,1],
        easing: "easeInOutQuad",
        duration: 2400,
        delay: (el, i) => 200 * (i+1)
    }).add({
        targets: '.ml3',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 600000
    });
    
    var textWrapper = document.querySelector('.ml4');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    
    anime.timeline({loop: true})
    .add({
        targets: '.ml4 .letter',
        opacity: [0,1],
        easing: "easeInOutQuad",
        duration: 1500,
        delay: (el, i) => 200 * (i+11)
    }).add({
        targets: '.ml4',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 600000
    });
    
    var textWrapper = document.querySelector('.ml5');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    
    anime.timeline({loop: true})
    .add({
        targets: '.ml5 .letter',
        opacity: [0,1],
        easing: "easeInOutQuad",
        duration: 3000,
        delay: (el, i) => 200 * (i+17)
    }).add({
        targets: '.ml5',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 600000
    });

    var textWrapper = document.querySelector('.ml6');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    
    anime.timeline({loop: true})
    .add({
        targets: '.ml6 .letter',
        opacity: [0,1],
        easing: "easeInOutQuad",
        duration: 3000,
        delay: (el, i) => 200 * (i+28)
    }).add({
        targets: '.ml6',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 600000
    });
</script>
@endsection