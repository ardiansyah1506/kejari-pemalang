@extends('layout.app')

@section('css-custom')
@endsection

@section('css-library')
@endsection


@section('content')
<div class="container mx-auto rounded-lg p-4">
    <h3 class="text-2xl font-semibold text-green-800 mb-1 ">BERITA</h3>
    <hr class="my-4 h-1 border" style="background: linear-gradient(to right, #eeb230 20%, #718096 20%)">

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach ($berita as $data)
            <div class="flex flex-col bg-white rounded-xl shadow-md border hover:shadow-lg transition-shadow duration-300 overflow-hidden h-full">
                <img src="{{ str_starts_with($data->foto, 'http') ? $data->foto : asset('foto_berita/' . $data->foto) }}" class="aspect-video w-full object-cover" alt="{{ $data->judul }}">
                <div class="p-5 flex flex-col flex-grow">
                    <a href="{{route('berita.detail',$data->id)}}" class="text-lg md:text-xl font-bold text-green-800 hover:text-green-600 mb-3 line-clamp-2 leading-snug">{{ $data->judul }}</a>
                    <div class="text-sm text-gray-600 line-clamp-3 mb-4 flex-grow">
                        {!! strip_tags($data->deskripsi) !!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection

@section('js-library')
@endsection

@section('js-custom')
@endsection
