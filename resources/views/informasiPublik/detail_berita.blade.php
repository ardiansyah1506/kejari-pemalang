@extends('layout.app')

@section('css-custom')
    <style>
        .hero {
            height: 600px;
        }

        @media screen and (max-width: 600px) {
            .hero {
                height: 200px;
            }
        }
    </style>
@endsection

@section('css-library')
@endsection

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="w-full max-w-6xl mx-auto bg-white p-6 md:p-10 min-h-[500px] rounded-xl shadow-lg border border-gray-100">
            <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-green-800 mb-4 leading-tight">{{ $data->judul }}</h1>
            <p class="text-sm md:text-base text-[#006E61] mb-6 capitalize font-medium border-b pb-4">
                {{ $data->publisher }} | 
                @php
                    $createdAt = \Carbon\Carbon::parse($data->created_at);
                    $now = \Carbon\Carbon::now();
                    $diffInMinutes = $now->diffInMinutes($createdAt);
                    $diffInHours = $now->diffInHours($createdAt);
                    $diffInDays = $now->diffInDays($createdAt);
                    
                    if ($diffInMinutes < 1) {
                        echo 'baru saja';
                    } elseif ($diffInMinutes < 60) {
                        echo $diffInMinutes . ' menit yang lalu';
                    } elseif ($diffInHours < 24) {
                        echo $diffInHours . ' jam yang lalu';
                    } elseif ($diffInDays <= 7) {
                        echo $createdAt->diffForHumans();
                    } else {
                        echo $createdAt->translatedFormat('l, d F Y');
                    }
                @endphp
            </p>
            <div class="flex flex-col lg:flex-row gap-8">
                <div class="w-full lg:w-5/12 flex-shrink-0">
                    <img class="w-full aspect-[4/3] object-cover rounded-lg shadow-md"
                         src="{{ str_starts_with($data->foto, 'http') ? $data->foto : asset('foto_berita/' . $data->foto) }}" alt="{{ $data->judul }}">
                </div>
                <div class="w-full lg:w-7/12 text-gray-700 text-justify leading-relaxed prose max-w-none">
                    {!! $data->deskripsi !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js-library')
@endsection

@section('js-custom')
@endsection
