<?php

namespace App\Http\Controllers;

use App\Models\Donut;
use App\Models\Order;
use App\Models\OrderDetail;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function index()
    {
        $orders = Order::get();

        return view('admin.shopping-cart.index',compact('orders'));
    }



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

    public function update(Request $request)
    {
        $donut = Donut::find($request->id);

        \Cart::update($donut->id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->qty
            ),
        ));

        $item = \Cart::get($donut->id);

        return $item;
    }

    public function delete(Request $request)
    {
        \Cart::remove($request->id);

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
            $donut = Donut::find($item->id);
            $od = OrderDetail::create([
                'order_id'=>$order->id,
                'donut_id'=>$donut->id,
                'name'=>$donut->name,
                'price'=>$donut->price,
                'qty'=>$item->quantity,
                'image_url'=>$donut->image_url,
            ]);
        }
        
        return redirect()->route('shopping-cart.step04',['order_no'=>$order->order_no]);
    }
    
    public function step04($orderNo)
    {
        $order = Order::with('orderDetails')->where('order_no',$orderNo)->first();
        // 交易完成，清除訂單
        \Cart::clear();
        
        return view('front.shopping-cart.step04',compact('order'));
    }

}