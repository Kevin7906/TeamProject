<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- font-awesom Core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- layout Core CSS -->
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    {{-- sweetalert2 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.3/sweetalert2.min.css">
    @yield('css')
</head>

<body>
    <!-- 上方 Navbar -->
    <nav class="navbar navbar-expand-md navbar-light" style="background-color: rgb(248, 233, 209);">
        <div class="container col-10">
            <a class="navbar-brand" href="">
                <img src="{{asset('images/logo.jpeg')}}" width="60" alt="" style="border-radius: 50%;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item d-flex justify-content-center me-5">
                        <a class="link" href="{{route('about')}}"><i class="fas fa-dumpster me-1"></i>
                        <span>關於一伴</span>
                        </a>
                    </li>
                    <li class="nav-item d-flex justify-content-center me-5">
                        <a class="link" href="{{route('product.list')}}"><i class="fas fa-utensils me-1"></i>
                        <span>美味餐點</span>
                        </a>
                    </li>
                    <li class="nav-item d-flex justify-content-center me-5">
                        <a class="link" href="{{route('location.list')}}"><i class="fas fa-comments me-1"></i>
                        <span>店面資訊</span>
                        </a>
                    </li>
                    <li class="nav-item d-flex justify-content-center me-5">
                        <a class="link" href="{{route('donut.list')}}"><i class="fas fa-truck"></i>
                        <span>宅配限定</span>
                        </a>
                    </li>
                    <li class="nav-item d-flex justify-content-center">
                        <a class="nav-link" href="{{route('shopping-cart.step01')}}">
                            <i class="fas fa-shopping-cart"></i>
                            <span>購物車</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('main')
    </main>

    <!-- 下方footer -->
        <footer class="page-footer font-small indigo d-flex justify-content-center ">
            <div class="col-md-3 d-flex flex-column justify-content-center align-items-center">
                <div class="mb-4">Follow Us Now</div>
                <ul class="d-flex" style="list-style: none;">
                    <li class="me-3">
                        <i class="fab fa-facebook-f"></i>
                    </li>
                    <li class="me-3">
                        <i class="fab fa-twitter"></i>
                    </li>
                    <li class="me-3">
                        <i class="fab fa-instagram"></i>
                    </li>
                    <li class="me-3">
                        <i class="fab fa-google-plus-g"></i>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 d-flex flex-column justify-content-center align-items-center">
                <h3 class="mb-4">一人一伴ともだち</h3>
                <p>Copyright © 2022.中興大學全端工程師養成班</p>
            </div>
            <div class="col-md-3 d-flex flex-column justify-content-center align-items-center">
                <div class="mb-4">店家資訊</div>
                <p class="mb-1">04-2301-1928</p>
                <p>台中市西區向上路一段17巷1弄10號</p>
            </div>
        </footer>    


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
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" 
            crossorigin="anonymous">
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
    </script>


    <script src="{{asset('js/app.js')}}"></script>
    @yield('js')
</body>
</html>