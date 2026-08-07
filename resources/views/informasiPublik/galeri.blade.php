@extends('layout.app')

@section('css-custom')
@endsection

@section('css-library')
@endsection


@section('content')
<div class="container mx-auto rounded-lg p-4">
    <h3 class="text-2xl font-semibold text-green-800 mb-1 ">GALERI</h3>
    <hr class="my-4 h-1 border" style="background: linear-gradient(to right, #eeb230 20%, #718096 20%)">

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($galeri as $data)
            <div class="w-full aspect-[4/3] rounded-xl overflow-hidden shadow-md group">
                <img src="{{ str_starts_with($data->foto, 'http') ? $data->foto : asset('foto_galeri/' . $data->foto) }}" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110" alt="Galeri Image">
            </div>
        @endforeach
    </div>
</div>

@endsection

@section('js-library')
@endsection

@section('js-custom')
@endsection
