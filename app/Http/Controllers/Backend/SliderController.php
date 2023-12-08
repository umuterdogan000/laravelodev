<?php

namespace App\Http\Controllers\Backend;

use App\Models\Slider;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;



class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $sliders = Slider::all();
        return view('backend.pages.slider.index', compact('sliders'));
    }
        /** oluştururken php artisan make:controller Backend/SliderController --resource kodunu kullanırsan içi dolu gelir,
        * --resource kullanmadan oluşturursan normal şekilde boş halini oluşturur
        */

    public function create()
    {
        return view('backend.pages.slider.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request)
    {

         if ($request->hasFile('image')) {
                $resim = $request->file('image');
                $dosyadi = time().'-'.Str::slug($request->name).'.'.$resim->getClientOriginalExtension();
                $resim->move(public_path('img/slider'), $dosyadi);
            }
            Slider::create([
                'name'=> $request->name,
                'link'=>$request->link,
                'status'=>$request->status,
                'image' =>$dosyadi
            ]);

            return back()->withSuccess('Başarıyla oluşturuldu');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::where('id',$id)->first();
        return view('backend.pages.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->hasFile('image')) {
            $resim = $request->file('image');
            $dosyadi = time().'-'.Str::slug($request->name).'.'.$resim->getClientOriginalExtension();
            $resim->move(public_path('img/slider'), $dosyadi);
        }
        Slider::where('id',$id)->update([
            'name'=> $request->name,
            'link'=>$request->link,
            'status'=>$request->status,

        ]);

        return back()->withSuccess('Başarıyla güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::where('id',$id)->firstOrFail();

        if(file_exists($slider->image)) {

            if(!empty($slider->image)) {
                unlink($slider->image);
            }
        }


        $slider->delete();
        return back()->withSuccess('Başarıyla silindi');
    }
}
