@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<style>
    th,td{
            text-align: center;
            vertical-align: middle;
        }
</style>

@endsection

@section('main')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <h2 class="card-header">產品管理</h2>
                <div class="form-group pt-4 px-3 m-0">
                    <a href="{{route('products.create')}}" class="btn btn-success">新增產品</a>
                </div>
                <hr>
                <div class="card-body">
                    <table id="my-table" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>類別</th>
                                <th>名稱</th>
                                <th>描述</th>
                                <th>價格</th>
                                <th width="200px">主要圖片</th>
                                <th width="150px">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{$product->menu_category_id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->price}}</td>
                                    <td><img src="{{Storage::url($product->image_url)}}" alt="" width="200"></td>
                                    <td>
                                        <a href="{{route('products.edit',['product' => $product->id])}}" class="btn btn-primary">編輯</a>
                                        <button class="btn btn-danger delete-btn">刪除</button>
                                        <form class="d-none delete-btn" action="{{route('products.destroy',['product' => $product->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    // 初始化datatable
    $(document).ready( function () {
        $('#my-table').DataTable({
            "order": [],
            language:{
                url:"{{asset('js/datatable-zh.json')}}"
            }
        });
    });

    // 刪除功能
    const deleteElements = document.querySelectorAll('.delete-btn');
    deleteElements.forEach(function(elementElement) {
        elementElement.addEventListener('click', function(){
            if(confirm('確定刪除這筆資料嗎？')){
                this.nextElementSibling.submit();
            }
        });
    });
</script>
@endsection