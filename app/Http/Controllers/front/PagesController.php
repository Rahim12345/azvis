<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\HomeBanner;
use App\Models\HomeSlider;

class PagesController extends Controller
{
    public function home()
    {
        return view('front.pages.home',[
            'banners'=>HomeBanner::latest()->get(),
            'home_sliders'=>HomeSlider::latest()->get(),
            'doctors'=>Doctor::latest()->get(),
        ]);
    }
}
