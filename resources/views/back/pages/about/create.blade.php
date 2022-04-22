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
                    <div class="content p-3">
                        <form action="{{ route('about.store') }}" id="home-form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3 ">
                                <label class="form-label" for="about_us_ru">Foto</label>
                                <input type="file" name="image_slider" id="image_slider" class="form-control">
                                @error('image_slider')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <img src="{{ asset('files/about/'.\App\Helpers\Options::getOption('about_src')) }}" alt="" width="100">

                            <div class="form-group mb-3">
                                <label class="form-label" for="about_az">About(az)</label>
                                <textarea name="about_az" id="" cols="30" rows="4" class="form-control">{{ old('about_az',\App\Helpers\Options::getOption('about_az')) }}</textarea>
                                @error('about_az')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="about_en">About(en)</label>
                                <textarea name="about_en" id="" cols="30" rows="4" class="form-control">{{ old('about_en',\App\Helpers\Options::getOption('about_en')) }}</textarea>
                                @error('about_en')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="about_ru">About(ru)</label>
                                <textarea name="about_ru" id="" cols="30" rows="4" class="form-control">{{ old('about_ru',\App\Helpers\Options::getOption('about_ru')) }}</textarea>
                                @error('about_ru')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary float-end" type="submit" id="add">{{ __('static.elave_et') }}</button>
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
