@extends('layouts.update')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<style>
    th,td{
            text-align: center;
            vertical-align: middle;
        }
</style>

@endsection

@section('title')
    <h2 class="backend-title">訂單管理</h2>
@endsection

@section('main')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="form-group pt-4 px-3 m-0">
                    {{-- <a href="" class="btn btn-success">新</a> --}}
                </div>
                <hr>
                <div class="card-body">
                    <table id="my-table" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>訂單編號</th>
                                <th>訂購人</th>
                                <th>連絡電話</th>
                                <th>地址</th>
                                <th width="200px">E-mail</th>
                                <th width="150px">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{$order->order_no}}</td>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->phone}}</td>
                                    <td>{{$order->address}}</td>
                                    <td>{{$order->email}}</td>
                                    {{-- <td><img src="{{Storage::url($order->image_url)}}" alt="" width="200"></td> --}}
                                    <td>
                                        {{-- <a href="{{route('products.edit',['product' => $product->id])}}" class="btn btn-primary">編輯</a>
                                        <button class="btn btn-danger delete-btn">刪除</button>
                                        <form class="d-none delete-btn" action="{{route('products.destroy',['product' => $product->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form> --}}
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