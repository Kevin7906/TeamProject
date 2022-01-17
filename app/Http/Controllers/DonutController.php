<?php

namespace App\Http\Controllers;

use App\Models\Donut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DonutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donuts = Donut::get();

        return view('admin.donut.index',compact('donuts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.donut.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = Storage::put('/donut',$request->image_url);

        Donut::create([
            'donut_category_id' => $request->donut_category_id,
            'name' => $request->name,
            'price' => $request->price,
            'description'=> $request->description,
            'image_url'=> $path
        ]);

        return redirect()->route('donuts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donut = Donut::find($id);

        return view('admin.donut.edit',compact('donut'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $donut = Donut::find($id);
        if ($request->hasFile('image_url')) {
            Storage::delete($donut->imageurl);
            $path = Storage::put('/donut',$request->image_url);
        } else{
            $path = $donut->image_url;
        }

        $donut->update([
            'donut_category_id' => $request->donut_category_id,
            'name' => $request->name,
            'price' => $request->price,
            'description'=> $request->description,
            'image_url'=> $path,
        ]);

        return redirect()->route('donuts.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donut = Donut::find($id);

        Storage::delete($donut->image_url);

        $donut->delete();
        
        return redirect()->route('donuts.index');
    }
}
