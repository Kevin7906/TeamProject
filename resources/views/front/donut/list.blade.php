@extends('layouts.template')
@section('title','一人一伴 - 宅配限定')

@section('css')
<link rel="stylesheet" href="{{asset('css/donut-list.css')}}">
@endsection

@section('main')
<section>
    <!-- 上方輪播區 -->
    <div class="container mb-5 col-10">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                    class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/banner01.jpeg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/banner02.jpeg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/banner03.jpeg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- 這裡不知道要放什麼區 -->
    <div class="container mb-5 col-10 d-flex justify-content-between">
        <div class="col-6">
            <p style="font-size: 26px;">❗️❗️❗️訂單確認

                您於選購完成後我們將會依照順序接收訂單，核准訂單後會發出訂單確認通知至信箱，代表您的訂單已完成。(訂購完成通知只是完成訂單填寫,不代表商家確定已接此筆訂單)
                
                若當日接受預定顆數已滿，則無法接受您的訂單，則會收到訂單取消. 
                
                ###每日特殊口味僅為一種,選擇日期後即可看到,若尚未出現當日特殊口味選項可打在備註,人員會替您填寫上去,謝謝。</p>
        </div>
        <img src="https://ucarecdn.com/535ff66a-0b26-4ca0-848c-0c649e5ef0c2/" alt="" class="col-6">            
    </div>

    <!-- 中央選購區 -->
    <div class="container col-10 d-flex flex-wrap justify-content-between">
        <div class="donut-decorate">
            <h3 class="donut-text">I-Love-Delicious-Donut.</h3></div>
        <div class="accordion col-12" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: brown;">
                        經典原味
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show " aria-labelledby="headingOne">
                    <div class="accordion-body d-flex flex-wrap justify-content-between">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://images.weserv.nl/?url=https://s3-ap-southeast-1.amazonaws.com/v3-live.image.oddle.me/product/a7a5f2_1631698918868.jpg&h=1000&fit=cover"
                                        class="img-fluid rounded-start" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">原味</h5>
                                        <p class="card-text">當日一個一個純手工製作而成,為了達到口感與健康的平衡,只使用良好的食材來製作。</p>
                                        <p class="card-text"><small class="text-muted">NT$38</small></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="buy-content">
                                                <div class="prev calc-btn" onclick="prevNum()"></div>
                                                <div class="next calc-btn" onclick="nextNum()"></div>
                                                <div id="box"></div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="far fa-heart me-2" style="font-size: 26px; cursor: pointer;;"></i>
                                                <a href="" class="buy-btn text-reset text-decoration-none">
                                                    <p>加入購物車</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: brown;">
                        季節限定
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                    <div class="accordion-body d-flex flex-wrap justify-content-between">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://images.weserv.nl/?url=https://s3-ap-southeast-1.amazonaws.com/v3-live.image.oddle.me/product/a7a5f2_1631698918868.jpg&h=1000&fit=cover"
                                        class="img-fluid rounded-start" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">原味</h5>
                                        <p class="card-text">當日一個一個純手工製作而成,為了達到口感與健康的平衡,只使用良好的食材來製作。</p>
                                        <p class="card-text"><small class="text-muted">NT$38</small></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="buy-content">
                                                <div class="prev calc-btn" onclick="prevNum()"></div>
                                                <div class="next calc-btn" onclick="nextNum()"></div>
                                                <div id="box"></div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="far fa-heart me-2" style="font-size: 26px; cursor: pointer;;"></i>
                                                <a href="" class="buy-btn text-reset text-decoration-none">
                                                    <p>加入購物車</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: brown;">
                        特殊風味
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                    <div class="accordion-body d-flex flex-wrap justify-content-between">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://images.weserv.nl/?url=https://s3-ap-southeast-1.amazonaws.com/v3-live.image.oddle.me/product/a7a5f2_1631698918868.jpg&h=1000&fit=cover"
                                        class="img-fluid rounded-start" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">原味</h5>
                                        <p class="card-text">當日一個一個純手工製作而成,為了達到口感與健康的平衡,只使用良好的食材來製作。</p>
                                        <p class="card-text"><small class="text-muted">NT$38</small></p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="buy-content">
                                                <div class="prev calc-btn" onclick="prevNum()"></div>
                                                <div class="next calc-btn" onclick="nextNum()"></div>
                                                <div id="box"></div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="far fa-heart me-2" style="font-size: 26px; cursor: pointer;;"></i>
                                                <a href="" class="buy-btn text-reset text-decoration-none">
                                                    <p>加入購物車</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
    </div>

    <div style="height: 60px;"></div>
</section>
@endsection

@section('js')
    <!-- 甜甜圈左上角裝飾 開始 -->
    <script>
        const text = document.querySelector('.donut-text');
        text.innerHTML = text.textContent.replace(/\S/g,
        "<span>$&</span>");

        const element = document.querySelectorAll('span');
        for(let i = 0; i < element.length; i++) {
            element[i].style.transform = "rotate("+ i * 16 +"deg)"
        }
    </script>
    <!-- 甜甜圈左上角裝飾 結束 -->

    <!-- 數量增減動畫 開始 -->
    <script type="text/javascript">
        var numbers = document.querySelector('#box');
        for(i = 0; i < 30; i ++) {
            var btnElements = document.createElement('span');
            btnElements.textContent = i;
            numbers.appendChild(btnElements);
        }
        var num = numbers.getElementsByTagName('span');
        var index = 0;

        function nextNum() {
            num[index].style.display = 'none';
            index = (index + 1) % num.length;
            num[index].style.display = 'initial';
        }

        function prevNum() {
            num[index].style.display = 'none';
            index = (index - 1 + num.length) % num.length;
            num[index].style.display = 'initial';
        }
    </script>
    <!-- 數量增減動畫 結束 -->

    <!-- 加入購物車按紐 開始 -->
    <script>
        const btn = document.querySelectorAll('.buy-btn');
        btn.onmousemove = function(e) {
            const x = e.pageX - btn.offsetLeft;
            const y = e.pageY - btn.offsetTop;

            btn.style.setProperty('--x', x + 'px');
            btn.style.setProperty('--y', y + 'px');
        }
    </script>
    <!-- 加入購物車按紐 結束 -->
@endsection