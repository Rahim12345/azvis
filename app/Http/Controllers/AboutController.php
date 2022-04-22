<?php

namespace App\Http\Controllers;

use App\Helpers\Options;
use App\Models\About;
use App\Models\Option;
use App\Traits\FileUploader;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    use FileUploader;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $option = Options::getOption('about_src');
        if ($option == '')
        {
            $this->validate($request,[
                'image_slider'=>'required|image|max:2048',
                'about_az'=>'required|max:10000',
                'about_en'=>'required|max:10000',
                'about_ru'=>'required|max:10000'
            ],[],[
                'image_slider'=>'Foto',
                'about_az'=>'About(az)',
                'about_en'=>'About(en)',
                'about_ru'=>'About(ru)',
            ]);
            $src = $this->fileSave('files/about/',$request->image_slider);
        }
        else
        {
            $this->validate($request,[
                'image_slider'=>'nullable|image|max:2048',
                'about_az'=>'required|max:10000',
                'about_en'=>'required|max:10000',
                'about_ru'=>'required|max:10000'
            ],[],[
                'image_slider'=>'Foto',
                'about_az'=>'About(az)',
                'about_en'=>'About(en)',
                'about_ru'=>'About(ru)',
            ]);
            $src   = $this->fileUpdate($option, $request->hasFile('image_slider'), $request->image_slider, 'files/about/');
        }

        foreach ($request->keys() as $key)
        {
            if ($key != '_token' && $key != 'image_slider')
            {
                Option::updateOrCreate(
                    ['key'   => $key],
                    [
                        'value' => $request->post($key)
                    ]
                );
            }
        }

        Option::updateOrCreate(
            ['key'   => 'about_src'],
            [
                'value' => $src
            ]
        );
        toastr()->success('Data uğurla əlavə edildi');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
