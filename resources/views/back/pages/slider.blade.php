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
                        <form action="{{ route('back.slider_banner.post') }}" id="home-form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3 ">
                                <label class="form-label" for="about_us_ru">Foto</label>
                                <input type="file" name="image_slider" id="image_slider" class="form-control">
                                @error('image_slider')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="about_us_ru">Text(az***en***ru)</label>
                                <input type="text" name="text" class="form-control" value="{{ old('text') }}">
                                @error('text')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label" for="link">Link</label>
                                <input type="text" name="link" class="form-control" value="{{ old('link') }}">
                                @error('link')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary float-end" type="submit" id="add">{{ __('static.elave_et') }}</button>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <table class="table">
                        @foreach($sliders as $slider)
                            <tr>
                                <td><img src="{{ asset('files/home/'.$slider->src) }}" alt="" style="width: 100px;"></td>
                                <td>{{ $slider->text_az }}</td>
                                <td>
                                    <form action="{{ route('back.slider_banner.delete',$slider->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit" onclick="return confirm(\'Silmek istədiyinizdən əminsiniz?\')"><i class="fa fa-times"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        @include('back.includes.footer')
    </div>
@endsection

@section('js')

@endsection
