<?php

namespace App\Http\Controllers;

use App\Models\HomeBanner;
use App\Models\HomeSlider;
use App\Rules\FieldThreeLangs;
use App\Traits\FileUploader;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use FileUploader;
    public function index()
    {
        return view('back.pages.banner',[
            'banners'=>HomeBanner::latest()->get()
        ]);
    }

    public function indexPost()
    {
        $this->validate(\request(),[
            'image_slider'=>'required',
            'text'=>['required','max:255',new FieldThreeLangs()],
        ],[],[
            'image_slider'=>'Foto',
            'text'=>'Text'
        ]);
        $src = $this->fileSave('files/home/',\request()->image_slider);
        $text = explode('***',\request()->text);

        HomeBanner::create([
            'src'=>$src,
            'text_az'=>$text[0],
            'text_en'=>$text[1],
            'text_ru'=>$text[2],
        ]);

        toastSuccess('Banner əlavə edildi');
        return back();
    }

    public function bannerDelete($id)
    {
        $banner = HomeBanner::findOrFail($id);
        $this->fileDelete('files/home/'.$banner->src);

        $banner->delete();

        toastSuccess('Banner silindi');
        return back();
    }

    public function slider_index()
    {
        return view('back.pages.slider',[
            'sliders'=>HomeSlider::latest()->get()
        ]);
    }

    public function slider_indexPost()
    {
        $this->validate(\request(),[
            'image_slider'=>'required|image|max:2048',
            'text'=>['required','max:255',new FieldThreeLangs()],
            'link'=>['required', 'url','max:255'],
        ],[],[
            'image_slider'=>'Foto',
            'text'=>'Text',
            'link'=>'Link',
        ]);
        $src = $this->fileSave('files/home/',\request()->image_slider);
        $text = explode('***',\request()->text);

        HomeSlider::create([
            'src'=>$src,
            'text_az'=>$text[0],
            'text_en'=>$text[1],
            'text_ru'=>$text[2],
            'link'=>\request()->link,
        ]);

        toastSuccess('Slider əlavə edildi');
        return back();
    }

    public function slider_bannerDelete($id)
    {
        $banner = HomeSlider::findOrFail($id);
        $this->fileDelete('files/home/'.$banner->src);

        $banner->delete();

        toastSuccess('Slider silindi');
        return back();
    }
}
