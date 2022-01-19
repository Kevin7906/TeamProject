<?php

namespace App\Http\Controllers;

use App\Models\Donut;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('front.about.about');
    }

    public function donutList()
    {
        $classes = Donut::where('donut_category_id','class')->get();
        $tastes = Donut::where('donut_category_id','taste')->get();
        $colors = Donut::where('donut_category_id','colorful')->get();

        return view('front.donut.list',compact('classes','tastes','colors'));
    }

    public function locationList()
    {
        return view('front.location.list');
    }

    public function productList()
    {
        return view('front.product.list');
    }

}
