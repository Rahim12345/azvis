@extends('back.layout.master')

@section('title') {{ __('menus.home') }} @endsection

@section('css')

@endsection

@section('content')
    <div class="page">
        @include('back.includes.menu')
        <div class="container-xl mt-3" style="min-height: 70vh">
            <div class="row row-cards">
                <div class="col-md-8 offset-md-2">
                    <a href="{{ route('service.index') }}" class="btn btn-primary w-100">Bütün</a>
                    <div class="content p-3">
                        <form action="{{ route('service.update',$service->id) }}" id="home-form" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3 ">
                                <label class="form-label" for="icon">Icon</label>
                                <input type="file" name="icon" id="icon" class="form-control">
                                @error('icon')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <img src="{{ asset('files/service/'.$service->icon) }}" alt="" width="100">

                            <div class="form-group mb-3">
                                <label class="form-label" for="name">Name(az***en***ru)</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name',$service->name_az.'***'.$service->name_en.'***'.$service->name_ru) }}">
                                @error('name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="about_az">About(az)</label>
                                <textarea name="about_az" id="" cols="30" rows="4" class="form-control">{{ old('about_az',$service->text_az) }}</textarea>
                                @error('about_az')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="about_en">About(en)</label>
                                <textarea name="about_en" id="" cols="30" rows="4" class="form-control">{{ old('about_en',$service->text_en) }}</textarea>
                                @error('about_en')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="about_ru">About(ru)</label>
                                <textarea name="about_ru" id="" cols="30" rows="4" class="form-control">{{ old('about_ru',$service->text_ru) }}</textarea>
                                @error('about_ru')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-3 ">
                                <label class="form-label" for="about_us_ru">Foto</label>
                                <input type="file" name="image_slider" id="image_slider" class="form-control">
                                @error('image_slider')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <img src="{{ asset('files/service/'.$service->foto) }}" alt="" width="100">

                            <div class="form-group">
                                <button class="btn btn-primary float-end" type="submit" id="add">{{ __('static.redakte') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('back.includes.footer')
    </div>
@endsection

@section('js')

@endsection
