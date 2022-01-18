@extends('layouts.template')
@section('title','宅配限定')

@section('css')
{{-- sweetalert2 --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.3/sweetalert2.min.css">
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
                    <div class="carousel-control-prev-icon" aria-hidden="true"></div>
                    <div class="visually-hidden">Previous</div>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <div class="carousel-control-next-icon" aria-hidden="true"></div>
                    <div class="visually-hidden">Next</div>
                </button>
            </div>
        </div>
        
        <!-- 這裡不知道要放什麼區 -->
        <div class="container mb-5 col-10 d-flex justify-content-between">
            <div class="col-6">
                <p style="font-size: 26px;">❗️❗️❗️訂單確認
                    
                    您於選購完成後我們將會依照順序接收訂單，核准訂單後會發出訂單確認通知至信箱，代表您的訂單已完成。(訂購完成通知只是完成訂單填寫,不代表商家確定已接此筆訂單)
                    
                    若當日接受預定顆數已滿，則無法接受您的訂單，則會收到訂單取消.
                    
                    ###每日特殊口味僅為一種,選擇日期後即可看到,若尚未出現當日特殊口味選項可打在備註,人員會替您填寫上去,謝謝</p>
                </div>
                <img src="https://ucarecdn.com/535ff66a-0b26-4ca0-848c-0c649e5ef0c2/" alt="" class="col-6" style="width: 29vw; height: 28vw; ">
            </div>
            
            <!-- 中央選購區 -->
            <div class="container col-10 d-flex flex-wrap justify-content-between">
                <div class="donut-decorate">
                    <h3 class="donut-text">I-Love-Delicious-Donut.</h3>
                </div>
                <div class="accordion col-12" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="ture" aria-controls="collapseOne"
                            style="color: brown;">
                            經典原味
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show " aria-labelledby="headingOne">
                        <div class="accordion-body d-flex flex-wrap justify-content-between">
                            <div class="row">
                                @foreach ($classes as $class)
                                <div class="card mb-3 col-12 col-xxl-6">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="{{Storage::url($class->image_url)}}"
                                            class="img-fluid rounded-start" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$class->name}}</h5>
                                                <p class="card-text">{{$class->description}}</p>
                                                <p class="card-text fs-4">NT${{$class->price}}</p>
                                                <div class="d-flex justify-content-end align-items-center">
                                                    <div class="qty-setting">
                                                        <div class="minus">-</div>
                                                        <input class="qty" min="1" value="1" type="text">
                                                        <div class="plus">+</div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <i class="far fa-heart me-2"
                                                        style="font-size: 26px; cursor: pointer;"></i>
                                                        <button data-id="{{$class->id}}" type="submit" class="buy-btn text-decoration-none add-cart">加入購物車</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                        style="color: brown;">
                        季節限定
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                    <div class="accordion-body d-flex flex-wrap justify-content-between">
                        <div class="row">
                            @foreach ($tastes as $taste)
                            <div class="card mb-3 col-12 col-xxl-6">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{Storage::url($taste->image_url)}}"
                                        class="img-fluid rounded-start" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$taste->name}}</h5>
                                            <p class="card-text">{{$taste->description}}</p>
                                            <p class="card-text fs-4">NT${{$taste->price}}</p>
                                            <div class="d-flex justify-content-end align-items-center">
                                                <div class="qty-setting">
                                                    <div class="minus">-</div>
                                                    <input class="qty" min="1" value="1" type="text">
                                                    <div class="plus">+</div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <i class="far fa-heart me-2"
                                                    style="font-size: 26px; cursor: pointer;"></i>
                                                    <button data-id="{{$taste->id}}" type="submit" class="buy-btn text-decoration-none add-cart">加入購物車</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                    style="color: brown;">
                    特殊風味
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                <div class="accordion-body d-flex flex-wrap justify-content-between">
                    <div class="row">
                        @foreach ($colors as $colorful)
                        <div class="card mb-3 col-12 col-xxl-6">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{Storage::url($colorful->image_url)}}"
                                    class="img-fluid rounded-start" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$colorful->name}}</h5>
                                        <p class="card-text">{{$colorful->description}}</p>
                                        <p class="card-text fs-4">NT${{$colorful->price}}</p>
                                        <div class="d-flex justify-content-end align-items-center">
                                            <div class="qty-setting">
                                                <div class="minus">-</div>
                                                <input class="qty" min="1" value="1" type="text">
                                                <div class="plus">+</div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <i class="far fa-heart me-2"
                                                style="font-size: 26px; cursor: pointer;"></i>
                                                <button data-id="{{$colorful->id}}" type="submit" class="buy-btn text-decoration-none add-cart">加入購物車</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>         
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 60px;"></div>
    </section>
@endsection

@section('js')
{{-- sweetalert2 --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.3/sweetalert2.min.js"></script>
<script>
    @if (session('message'))
    Swal.fire({
        icon: 'error',
        title: '{{session('message')}}',
    })
    @endif
</script>
{{--  甜甜圈左上角裝飾 開始  --}}
<script>
    const text = document.querySelector('.donut-text');
    text.innerHTML = text.textContent.replace(/\S/g,
        "<span>$&</span>");

    const element = document.querySelectorAll('span');
    for (let i = 0; i < element.length; i++) {
        element[i].style.transform = "rotate(" + i * 16 + "deg)"
    }
</script>
<!-- 甜甜圈左上角裝飾 結束 -->

<!-- 數量增減動畫 開始 -->
<script>

</script>
<!-- 數量增減動畫 結束 -->

<!-- 加入購物車按紐 開始 -->
<script>
    // const btn = document.querySelectorAll('.buy-btn');
    // btn.onmousemove = function (e) {
    //     const x = e.pageX - btn.offsetLeft;
    //     const y = e.pageY - btn.offsetTop;

    //     btn.style.setProperty('--x', x + 'px');
    //     btn.style.setProperty('--y', y + 'px');
    // }
        // foreach.function (水果盒裡的每個水果,水果盒裡的水果位置)

        const plusElements = document.querySelectorAll('.plus');
        const minusElements = document.querySelectorAll('.minus');
        const inputElements = document.querySelectorAll('.qty');
        const addCartElements = document.querySelectorAll('.add-cart');
        plusElements.forEach( function(plusElement,index) {
            plusElement.addEventListener('click',function(){
                inputElements[index].value = Number(inputElements[index].value) + 1;
            }); 
        });
        minusElements.forEach( function(minusElement,index) {
            minusElement.addEventListener('click',function(){
                if (inputElements[index].value > 1) {
                    inputElements[index].value = Number(inputElements[index].value) - 1;
                };
            });
        });
        addCartElements.forEach( function(addCartElement,index){
            addCartElement.addEventListener('click',function(){
                // 產品ID
                let productId = this.getAttribute('data-id');
                // 產品數量
                let qty = inputElements[index].value;
                let formData = new FormData();
                formData.append('_token','{{csrf_token()}}');
                formData.append('id',productId);
                formData.append('qty',qty);
                // fetch
                let url = '{{route('shopping-cart.add')}}';
                fetch(url,{
                    'method' : 'post',
                    'body' : formData
                }).then(function(response){
                    return response.text();
                }).then(function(data){
                    if (data == 'success') {
                        alert('加入成功');
                    }
                });
            });
        });
</script>
<!-- 加入購物車按紐 結束 -->
@endsection