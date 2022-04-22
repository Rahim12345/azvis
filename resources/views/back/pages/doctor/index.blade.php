@extends('back.layout.master')

@section('title')  @endsection

@section('css')

@endsection

@section('content')
    <div class="page">
        @include('back.includes.menu')
        <div class="container-xl mt-3" style="min-height: 70vh">
            <div class="row row-cards">
                <div class="col-md-8 offset-md-2">
                    <a href="{{ route('doctor.create') }}" class="btn btn-primary w-100">{{ __('static.elave_et') }}</a>
                    <table class="table">
                        @foreach($doctors as $doctor)
                            <tr>
                                <td><img src="{{ asset('files/doctor/'.$doctor->src) }}" alt="" style="width: 100px;"></td>
                                <td>{{ $doctor->name_az }}</td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                    <a href="{{ route('doctor.edit',$doctor->id) }}" class="btn btn-primary"><i class="fa fa-pen"></i></a>
                                    <form action="{{ route('doctor.destroy',$doctor->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit" onclick="return confirm(\'Silmek istədiyinizdən əminsiniz?\')"><i class="fa fa-times"></i></button>
                                    </form>
                                    </div>
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
