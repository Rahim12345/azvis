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
                    <a href="{{ route('service.create') }}" class="btn btn-primary w-100">{{ __('static.elave_et') }}</a>
                    <table class="table">
                        @foreach($services as $service)
                            <tr>
                                <td><img src="{{ asset('files/service/'.$service->icon) }}" alt="" style="width: 100px;"></td>
                                <td>{{ $service->name_az }}</td>
                                <td>
                                    <div class="btn-list flex-nowrap">
                                    <a href="{{ route('service.edit',$service->id) }}" class="btn btn-primary"><i class="fa fa-pen"></i></a>
                                    <form action="{{ route('service.destroy',$service->id) }}" method="POST">
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
