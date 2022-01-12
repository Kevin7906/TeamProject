<?php

namespace App\Http\Controllers;

use App\Models\Donut;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function add(Request $request)
    {

        
        $dount = Donut::find($request->id);
        
        \Cart::add(array(
            
    
        ));
    }           
}