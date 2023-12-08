<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageHomeController extends Controller
{
    public function anasayfa() {
        $slider = Slider::where('status', '0')->get();
        $title = 'Anasayfa';
        return view('frontend.pages.index', compact('slider', 'title'));
    }
}
