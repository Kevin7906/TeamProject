@extends('layouts.template')
@section('title','一伴美味')

@section('css')
    <link rel="stylesheet" href="{{asset('css/menu-list.css')}}">
@endsection

@section('main')
<section>
    <div class="banner" style="z-index: 10;">
        <div class="banner-img"></div>
    </div>
    <!-- 日式三明治 -->
    <div class="d-flex justify-content-center flex-wrap" style="background-color: rgb(249, 233, 209);">
        <div class="container d-flex justify-content-center col-10">
            <div class="card mb-5 mt-5" style="max-width: 100%; background-color: rgb(249, 233, 209);">
                <div class="row g-0 d-flex flex-wrap images">
                    <div class="col-12 d-flex mb-3">
                        <div class="col-md-4 me-3 food-info">
                            <img class="food__image"
                                src="{{asset('images/menu/products/sandwich-日式原味玉子燒.jpg')}}" alt="">
                            <div class="food__text">
                                <h2 class="fw-bold food__title" style="width: 260px">日式原味玉子燒</h2>
                                <p class="fw-bold food__body"> 選用葉黃素雞蛋製作並以北海道昆布柴魚高湯為基底再搭配完美調味醬汁比例混合，一層一層慢火香煎配上特製美乃滋成就經典。
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 me-3 food-info">
                            <img class="food__image"
                                src="{{asset('images/menu/products/sandwich-千層豬排玉子燒.jpeg')}}" alt="">
                            <div class="food__text">
                                <h2 class="fw-bold food__title" style="width: 260px">千層豬排玉子燒</h2>
                                <p class="fw-bold food__body"> 嚴選台灣履歷豬五花肉片裹上玉子燒一層一層堆疊且經過油炸變得金黃酥脆，再搭配自製豬排秘汁醬及特製美乃滋醬，擁有絕妙多汁口感。
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 food-info">
                            <img class="food__image"
                                src="{{asset('images/menu/products/sandwich-復刻日式蛋沙拉三明治.jpeg')}}" alt="">
                            <div class="food__text">
                                <h2 class="fw-bold food__title" style="width: 260px">復刻日式蛋沙拉</h2>
                                <p class="fw-bold food__body"> 完美復刻日式經典口味蛋沙拉，讓你一口咬下彷彿置身在日本，是一道不能錯過的國民日式三明治。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex mb-3">
                        <div class="col-md-5 me-5 food-info">
                            <img class="food__image"
                                src="{{asset('images/menu/products/sandwich-花醬起司玉子燒.jpeg')}}" alt="">
                            <div class="food__text">
                                <h2 class="fw-bold food__title" style="width: 300px">花醬雙起司玉子燒</h2>
                                <p class="fw-bold food__body"> 「莫札里拉起司」以及「切達起司」與玉子燒完美融合，再以新竹福源花生醬作為三明治基底，這般甜鹹的口味，點一份就對了!
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 food-info">
                            <img class="food__image"
                                src="{{asset('images/menu/products/大海干貝香蒜起司厚切丹麥.jpg')}}" alt="">
                            <div class="food__text">
                                <h2 class="fw-bold food__title" style="width: 450px">大海干貝香蒜起司厚切丹麥</h2>
                                <p class="fw-bold food__body"> 由麵包職人量身打造的27層厚丹麥不僅奶香十足酥脆100%，再搭配嚴選美國極致干貝加上特調自製香蒜起司濃郁醬，濃濃蒜香刺激你的味蕾，如果你是香蒜控這將是你唯一的選擇。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 經典飲品 -->
    <div class="d-flex justify-content-center flex-wrap menu-content" style="background-color: rgb(250, 224, 186);">
        <div class="container col-md-8">
            <div class="card mb-5 mt-5 border-0" style="max-width: 100%; background-color: rgb(250, 224, 186);">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title col-md-12 mb-3 d-flex justify-content-center">經典飲品</h5>
                            </div>
                            <hr class="col-md-12">
                            <div class="col-md-12 d-flex flex-wrap justify-content-center">
                                <div class="col-6 mt-4">
                                    <p class="card-text d-flex justify-content-center classic-drink classic-drink-active">仙女紅茶</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text d-flex justify-content-center classic-drink">紅玉紅茶</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text d-flex justify-content-center classic-drink">研磨豆漿</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text d-flex justify-content-center classic-drink">可爾必思</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text d-flex justify-content-center classic-drink">紐西蘭牛乳</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text d-flex justify-content-center classic-drink">美式咖啡</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text d-flex justify-content-center classic-drink">仙奶茶</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text d-flex justify-content-center"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="col-md-4 menu-img image-classic image-active" data-image="仙女紅茶" style="background-image:url({{asset('images/menu/products/drink-仙女紅茶.png')}}); background-position: right;"></div>
                        <div class="col-md-4 menu-img image-classic" data-image="紅玉紅茶" style="background-image: url({{asset('images/menu/products/drink-紅玉紅茶.jpg')}})"></div>
                        <div class="col-md-4 menu-img image-classic" data-image="研磨豆漿" style="background-image: url({{asset('images/menu/products/drink-研磨豆漿.jpg')}})"></div>
                        <div class="col-md-4 menu-img image-classic" data-image="可爾必思" style="background-image: url({{asset('images/menu/products/drink-可爾必思.jpg')}})"></div>
                        <div class="col-md-4 menu-img image-classic" data-image="紐西蘭牛乳" style="background-image: url({{asset('images/menu/products/drink-紐西蘭牛乳.jpg')}})"></div>
                        <div class="col-md-4 menu-img image-classic" data-image="美式咖啡" style="background-image: url({{asset('images/menu/products/drink-美式咖啡.jpg')}})"></div>
                        <div class="col-md-4 menu-img image-classic" data-image="仙奶茶" style="background-image: url({{asset('images/menu/products/drink-鮮奶茶.jpg')}})"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- 特調飲品 -->
    <div class="d-flex justify-content-center flex-wrap menu-content" style="background-color: rgb(249, 233, 209);">
        <div class="container col-md-8">
            <div class="card mb-5 mt-5 border-0" style="max-width: 100%; background-color: rgb(249, 233, 209)">
                <div class="row g-0">
                    <div class="col-md-4 menu-img image-special image-active" data-image="桂花檸檬紅茶" style="background-image: url({{asset('images/menu/products/drink-桂花檸檬紅茶.jpg')}})"></div>
                    <div class="col-md-4 menu-img image-special" data-image="黑糖奶茶" style="background-image: url({{asset('images/menu/products/special-黑糖奶茶.jpg')}})"></div>
                    <div class="col-md-4 menu-img image-special" data-image="鹿耳島厚抹茶牛乳" style="background-image: url({{asset('images/menu/products/special-鹿耳島厚抹茶牛乳.jpg')}})"></div>
                    <div class="col-md-4 menu-img image-special" data-image="米歇爾可可牛乳" style="background-image: url({{asset('images/menu/products/special-米歇爾可可牛乳.jpg')}})"></div>
                    <div class="col-md-4 menu-img image-special" data-image="咖啡歐蕾" style="background-image: url({{asset('images/menu/products/special-咖啡歐蕾.jpg')}})"></div>
                    <div class="col-md-4 menu-img image-special" data-image="季節桑椹歐蕾" style="background-image: url({{asset('images/menu/products/special-季節桑葚歐蕾.png')}})"></div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title col-md-12 mb-3 d-flex justify-content-center">特調飲品</h5>
                            </div>
                            <hr class="col-md-12">
                            <div class="col-md-12 d-flex flex-wrap justify-content-center">
                                <div class="col-6 mt-4">
                                    <p class="card-text d-flex justify-content-center special-drink special-drink-active">桂花檸檬紅茶</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text d-flex justify-content-center special-drink">黑糖奶茶</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text d-flex justify-content-center special-drink">鹿耳島厚抹茶牛乳</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text d-flex justify-content-center special-drink">米歇爾可可牛乳</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text d-flex justify-content-center special-drink">咖啡歐蕾</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text d-flex justify-content-center special-drink">季節桑椹歐蕾</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 特調氣泡飲 -->
    <div class="d-flex justify-content-center flex-wrap menu-content" style="background-color: rgb(250, 224, 186);">
        <div class="container col-md-8">
            <div class="card mb-5 mt-5 border-0" style="max-width: 100%; background-color: rgb(250, 224, 186);">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title col-md-12 mb-3 d-flex justify-content-center">特調氣泡飲</h5>
                            </div>
                            <hr class="col-md-12">
                            <div class="col-md-12 d-flex flex-wrap justify-content-center">
                                <div class="col-6 mt-4">
                                    <p class="card-text soda-drink soda-drink-active d-flex justify-content-center">可爾必思氣泡飲</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text soda-drink d-flex justify-content-center">桂花柚香氣泡飲</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text soda-drink d-flex justify-content-center">百香檸檬氣泡飲</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text soda-drink d-flex justify-content-center">葡萄柚蜂蜜氣泡飲</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text soda-drink d-flex justify-content-center">季節桑椹氣泡飲</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text soda-drink d-flex justify-content-center"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 menu-img image-soda image-active" data-image="可爾必思氣泡飲" style="background-image: url({{asset('images/menu/products/soda-可爾必思氣泡飲.jpg')}})"></div>
                    <div class="col-md-4 menu-img image-soda " data-image="桂花柚香氣泡飲" style="background-image: url({{asset('images/menu/products/soda-柚香桂花氣泡飲.jpg')}})"></div>
                    <div class="col-md-4 menu-img image-soda " data-image="百香檸檬氣泡飲" style="background-image: url({{asset('images/menu/products/soda-百香檸檬氣泡飲.jpg')}})"></div>
                    <div class="col-md-4 menu-img image-soda " data-image="葡萄柚蜂蜜氣泡飲" style="background-image: url({{asset('images/menu/products/soda-葡萄柚蜂蜜氣泡飲.jpg')}})"></div>
                    <div class="col-md-4 menu-img image-soda " data-image="季節桑椹氣泡飲" style="background-image: url({{asset('images/menu/products/soda-季節桑葚氣泡飲.jpg')}})"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- 單點佐味小食 -->
    <div class="d-flex justify-content-center flex-wrap menu-content final-menu" style="background-color: rgb(249, 233, 209);">
        <div class="container col-md-8">
            <div class="card mb-5 mt-5 border-0" style="max-width: 100%; background-color: rgb(249, 233, 209)">
                <div class="row g-0">
                    <div class="col-md-4 menu-img image-side-dish image-active" data-image="楔型薯塊" style="background-image: url({{asset('images/menu/products/楔型薯塊.jpg')}}); background-position-X: 100%"></div>
                    <div class="col-md-4 menu-img image-side-dish" data-image="半熟嫩蛋" style="background-image: url({{asset('images/menu/products/半熟嫩蛋.jpg')}}); background-position-X: 100%"></div>
                    <div class="col-md-4 menu-img image-side-dish" data-image="德國香腸" style="background-image: url({{asset('images/menu/products/德國香腸.png')}}); background-position-X: 100%"></div>
                    <div class="col-md-4 menu-img image-side-dish" data-image="和風時蔬" style="background-image: url({{asset('images/menu/products/和風時蔬.jpg')}}); background-position-X: 100%"></div>
                    <div class="col-md-4 menu-img image-side-dish" data-image="手工和風花枝丸（3顆）" style="background-image: url({{asset('images/menu/products/手工和風花枝丸.jpg')}}); background-position-X: 100%"></div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title col-md-12 mb-3 d-flex justify-content-center">單點佐味小食</h5>
                            </div>
                            <hr class="col-md-12">
                            <div class="col-md-12 d-flex flex-wrap justify-content-center">
                                <div class="col-6 mt-4">
                                    <p class="card-text side-dish side-dish-active d-flex justify-content-center">楔型薯塊</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text side-dish d-flex justify-content-center">半熟嫩蛋</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text side-dish d-flex justify-content-center">德國香腸</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text side-dish d-flex justify-content-center">和風時蔬</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text side-dish d-flex justify-content-center">手工和風花枝丸（3顆）</p>
                                </div>
                                <div class="col-6 mt-4">
                                    <p class="card-text d-flex justify-content-center"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    // 經典飲品(classic-drink)
    let classicDrinkBtns = document.querySelectorAll('.classic-drink');
    classicDrinkBtns.forEach(function (classicDrinkBtn) {
        classicDrinkBtn.addEventListener('click', function () {
            let chooseElement = document.querySelector('.classic-drink.classic-drink-active');
            if (chooseElement) {
                chooseElement.classList.remove('classic-drink-active');
            }
            classicDrinkBtn.classList.add('classic-drink-active');
            let drinkImage = document.querySelector('.image-classic.image-active');
            if (drinkImage) {
                drinkImage.classList.remove('image-active');
            }

            let tagValue = classicDrinkBtn.textContent;
            let showImage = document.querySelector(`[data-image="${tagValue}"]`);
            showImage.classList.add('image-active');
        })
    })
    // 特調飲品(special-drink)
    let specialDrinkBtns = document.querySelectorAll('.special-drink');
    specialDrinkBtns.forEach(function (specialDrinkBtn) {
        specialDrinkBtn.addEventListener('click', function () {
            let chooseElement = document.querySelector('.special-drink.special-drink-active');
            if (chooseElement) {
                chooseElement.classList.remove('special-drink-active');
            }
            specialDrinkBtn.classList.add('special-drink-active');
            let drinkImage = document.querySelector('.image-special.image-active');
            if (drinkImage) {
                drinkImage.classList.remove('image-active');
            }

            let tagValue = specialDrinkBtn.textContent;
            let showImage = document.querySelector(`[data-image="${tagValue}"]`);
            showImage.classList.add('image-active');
        })
    })
    // 氣泡飲品(soda-drink)
    let sodaDrinkBtns = document.querySelectorAll('.soda-drink');
    sodaDrinkBtns.forEach(function (sodaDrinkBtn) {
        sodaDrinkBtn.addEventListener('click', function () {
            let chooseElement = document.querySelector('.soda-drink.soda-drink-active');
            if (chooseElement) {
                chooseElement.classList.remove('soda-drink-active');
            }
            sodaDrinkBtn.classList.add('soda-drink-active');
            let drinkImage = document.querySelector('.image-soda.image-active');
            if (drinkImage) {
                drinkImage.classList.remove('image-active');
            }

            let tagValue = sodaDrinkBtn.textContent;
            let showImage = document.querySelector(`[data-image="${tagValue}"]`);
            showImage.classList.add('image-active');
        })
    })
    // 單點佐味小食(side-dish)
    let sideDishBtns = document.querySelectorAll('.side-dish');
    sideDishBtns.forEach(function (sideDishBtn) {
        sideDishBtn.addEventListener('click', function () {
            let chooseElement = document.querySelector('.side-dish.side-dish-active');
            if (chooseElement) {
                chooseElement.classList.remove('side-dish-active');
            }
            sideDishBtn.classList.add('side-dish-active');
            let drinkImage = document.querySelector('.image-side-dish.image-active');
            if (drinkImage) {
                drinkImage.classList.remove('image-active');
            }

            let tagValue = sideDishBtn.textContent;
            let showImage = document.querySelector(`[data-image="${tagValue}"]`);
            showImage.classList.add('image-active');
        })
    })
</script>
@endsection