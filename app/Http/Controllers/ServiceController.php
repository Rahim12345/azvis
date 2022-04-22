<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Rules\FieldThreeLangs;
use App\Traits\FileUploader;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    use FileUploader;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.pages.service.index',[
            'services'=>Service::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'icon'=>'required|image|max:2048',
            'name'=>['required','max:255',new FieldThreeLangs()],
            'about_az'=>['required','max:10000'],
            'about_en'=>['required','max:10000'],
            'about_ru'=>['required','max:10000'],
            'image_slider'=>'required|image|max:2048',
        ],[],[
            'icon'=>'Icon',
            'image_slider'=>'Foto',
            'name'=>'Name(az***en***ru)',
            'about_az'=>'About(az)',
            'about_en'=>'About(en)',
            'about_ru'=>'About(ru)',
        ]);
        $icon = $this->fileSave('files/service/',$request->icon);
        $foto = $this->fileSave('files/service/',$request->image_slider);
        $name = explode('***',\request()->name);

        Service::create([
            'icon'=>$icon,
            'name_az'=>$name[0],
            'name_en'=>$name[1],
            'name_ru'=>$name[2],
            'slug_az'=>str_slug($name[0]),
            'slug_en'=>str_slug($name[1]),
            'slug_ru'=>str_slug($name[2]),
            'text_az'=>\request()->about_az,
            'text_en'=>\request()->about_en,
            'text_ru'=>\request()->about_ru,
            'foto'=>$foto,
        ]);

        toastSuccess('Data əlavə edildi');
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('back.pages.service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->validate($request,[
            'icon'=>'nullable|image|max:2048',
            'name'=>['required','max:255',new FieldThreeLangs()],
            'about_az'=>['required','max:10000'],
            'about_en'=>['required','max:10000'],
            'about_ru'=>['required','max:10000'],
            'image_slider'=>'nullable|image|max:2048',
        ],[],[
            'icon'=>'Icon',
            'image_slider'=>'Foto',
            'name'=>'Name(az***en***ru)',
            'about_az'=>'About(az)',
            'about_en'=>'About(en)',
            'about_ru'=>'About(ru)',
        ]);

        $icon   = $this->fileUpdate($service->icon, $request->hasFile('icon'), $request->icon, 'files/service/');
        $foto   = $this->fileUpdate($service->foto, $request->hasFile('image_slider'), $request->image_slider, 'files/service/');
        $name = explode('***',\request()->name);

        $service->update([
            'icon'=>$icon,
            'name_az'=>$name[0],
            'name_en'=>$name[1],
            'name_ru'=>$name[2],
            'slug_az'=>str_slug($name[0]),
            'slug_en'=>str_slug($name[1]),
            'slug_ru'=>str_slug($name[2]),
            'text_az'=>\request()->about_az,
            'text_en'=>\request()->about_en,
            'text_ru'=>\request()->about_ru,
            'foto'=>$foto,
        ]);

        toastSuccess('Data redakte edildi');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $this->fileDelete('files/service/'.$service->icon);
        $this->fileDelete('files/service/'.$service->foto);

        $service->delete();

        toastSuccess('Həkim silindi');
        return back();
    }
}
