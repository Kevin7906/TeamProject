@extends('layouts.app')
@section('css')
<style>
    .img{
        width: 200px;
        height: 200px;
        background-size: cover;
        background-position: center;
        border: 1px solid #000;
        margin-right: 15px;
        margin-bottom: 15px;
        position: relative;
    }
</style>
@endsection

@section('main')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">首頁</a></li>
            <li class="breadcrumb-item"><a href="{{route('products.index')}}">產品管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">產品編輯</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h2 class="card-header pt-3 pb-2">產品 - 編輯</h2>

                <div class="card-body">
                    <form method="POST" action="{{route('products.update',['product' => $product->id])}}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row py-2">
                            <label for="category" class="col-sm-2 col-form-label">類別</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="category" name="menu_category_id" placeholder="請輸入: sandwich or toast or dessert or drink or special" value="{{$product->menu_category_id}}">
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="name" class="col-sm-2 col-form-label">名稱</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="price" class="col-sm-2 col-form-label">價格</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" min="0" id="price" name="price" value="{{$product->price}}">
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="img" class="col-sm-2 col-form-label">主要圖片</label>
                            <div class="col-sm-10">
                                <div class="img" style="background-image: url({{Storage::url($product->image_url)}})">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="image_url" class="col-sm-2 col-form-label">主要圖片(重新上傳)</label>
                            <div class="col-sm-10">
                                <input type="file" accept="image/*" class="form-control" id="image_url" name="image_url">
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <label for="description" class="col-sm-2 col-form-label">內容</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" id="description" rows="5">{{$product->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row py-2">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">編輯送出</button>
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
