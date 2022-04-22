<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Rules\FieldThreeLangs;
use App\Traits\FileUploader;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    use FileUploader;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.pages.doctor.index',[
            'doctors'=>Doctor::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.doctor.create');
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
            'image_slider'=>'required|image|max:2048',
            'name'=>['required','max:255',new FieldThreeLangs()],
            'vezife'=>['required','max:255',new FieldThreeLangs()],
            'about_az'=>['required','max:10000'],
            'about_en'=>['required','max:10000'],
            'about_ru'=>['required','max:10000'],
        ],[],[
            'image_slider'=>'Foto',
            'name'=>'Name(az***en***ru)',
            'vezife'=>'Vəzifə(az***en***ru)',
            'about_az'=>'About(az)',
            'about_en'=>'About(en)',
            'about_ru'=>'About(ru)',
        ]);

        $src = $this->fileSave('files/doctor/',\request()->image_slider);
        $name = explode('***',\request()->name);
        $vezife = explode('***',\request()->vezife);

        Doctor::create([
            'name_az'=>$name[0],
            'name_en'=>$name[1],
            'name_ru'=>$name[2],
            'vezife_az'=>$vezife[0],
            'vezife_en'=>$vezife[1],
            'vezife_ru'=>$vezife[2],
            'about_az'=>$request->about_az,
            'about_en'=>$request->about_en,
            'about_ru'=>$request->about_ru,
            'src'=>$src
        ]);

        toastSuccess('Həkim əlavə edildi');
        return redirect()->route('doctor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        return view('back.pages.doctor.edit',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $this->validate($request,[
            'image_slider'=>'nullable|image|max:2048',
            'name'=>['required','max:255',new FieldThreeLangs()],
            'vezife'=>['required','max:255',new FieldThreeLangs()],
            'about_az'=>['required','max:10000'],
            'about_en'=>['required','max:10000'],
            'about_ru'=>['required','max:10000'],
        ],[],[
            'image_slider'=>'Foto',
            'name'=>'Name(az***en***ru)',
            'vezife'=>'Vəzifə(az***en***ru)',
            'about_az'=>'About(az)',
            'about_en'=>'About(en)',
            'about_ru'=>'About(ru)',
        ]);

        $src   = $this->fileUpdate($doctor->src, $request->hasFile('image_slider'), $request->image_slider, 'files/doctor/');
        $name = explode('***',\request()->name);
        $vezife = explode('***',\request()->vezife);

        $doctor->update([
            'name_az'=>$name[0],
            'name_en'=>$name[1],
            'name_ru'=>$name[2],
            'vezife_az'=>$vezife[0],
            'vezife_en'=>$vezife[1],
            'vezife_ru'=>$vezife[2],
            'about_az'=>$request->about_az,
            'about_en'=>$request->about_en,
            'about_ru'=>$request->about_ru,
            'src'=>$src
        ]);

        toastSuccess('Həkim redakte edildi');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $this->fileDelete('files/doctor/'.$doctor->src);

        $doctor->delete();

        toastSuccess('Həkim silindi');
        return back();
    }
}
