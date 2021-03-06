@extends('layouts.update')
@section('css')

@endsection

@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset('/home')}}">首頁</a></li>
            <li class="breadcrumb-item"><a href="{{route('donuts.index')}}">甜甜圈管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">新增甜甜圈</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header pt-3 pb-2">甜甜圈 - 新增</h2>

                <div class="card-body">
                    <form method="POST" action="{{route('donuts.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row py-2">
                            <label for="category" class="col-sm-2 col-form-label">類別<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="category" name="donut_category_id" placeholder="請輸入: class or taste or colorful" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="name" class="col-sm-2 col-form-label">甜甜圈名稱<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="price" class="col-sm-2 col-form-label">價格<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="number" min="0" class="form-control" id="price" name="price" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="image_url" class="col-sm-2 col-form-label">主要圖片<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input type="file" accept="image/*" class="form-control" id="image-url" name="image_url" required>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="description" class="col-sm-2 col-form-label">內容<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" id="description" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">新增</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

@endsection
