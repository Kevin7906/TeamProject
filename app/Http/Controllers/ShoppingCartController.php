<?php

namespace App\Http\Controllers;

use App\Models\Donut;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function add(Request $request)
    {

        
        $donut = Donut::find($request->id);
        
        \Cart::add(array(
            'id' => $donut->id, // ID 
            'name' => $donut->name,
            'price'=> $donut->price,
            'quantity' => $request->qty,
            'attributes' =>array(
                'image_url' =>$donut->image_url,
            )
        ));
        return 'success';
    }
    
    public function step01()
    {
        $items = \Cart::getContent();

        return view('front.shopping-cart.step01',compact('items'));
    }

    public function step02()
    {
        return view('front.shopping-cart.step02');
    }

    public function step02Store(Request $request)
    {
        session([
            'payment' => $request->payment,
            'shipment' => $request->shipment,
        ]);
        return redirect()->route('shopping-cart.step03');
    }

    public function step03()
    {
        return view('front.shopping-cart.step03');
    }

    public function step03Store(Request $request)
    {
        $order = Order::create([
            'order_no'=>'DP'.time(),
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'payment' =>session('payment'),
            'shipment'=>session('shipment'),
        ]);

        $items = \Cart::getContent();
        foreach ($items as $item) {
            $product = Donut::find($item->id);
            OrderDetail::create([
                'order_id'=>$order->id,
                'donut_id'=>$product->id,
                'name'=>$product->name,
                'price'=>$product->price,
                'qty'=>$item->quantity,
                'image_url'=>$product->image_url,
            ]);
        }
        // 交易完成，清除訂單
        \Cart::clear();

        return redirect()->route('shopping-cart.step04',['order_no'=>$order->order_no]);
    }

    public function step04($orderNo)
    {
        $order = Order::with('orderDetails')->where('order_no',$orderNo)->first();

        return view('front.shopping-cart.step04',compact('order'));
    }

}