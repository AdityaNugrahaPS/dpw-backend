@extends('layouts.main')

@section('title', 'Wedding Invitation')

@section('content')
    <!-- Tulisan Jepang di kanan atas -->
   <div class="absolute top-[-130px] right-0 z-20 mr-2">
    <img src="/images/intro/tulisan-jepang.svg" alt="Tulisan Jepang" class="w-16 md:w-24">
</div>


    <!-- Teks Undangan -->
    <div class="flex flex-col items-center justify-center h-full text-center space-y-4 mt-20"
        style="font-family: 'Ovo', serif; color: #644F44;">
        <h1 class="text-lg md:text-2xl">The Wedding of</h1>
        <div class="font-angela text-3xl md:text-5xl leading-none">
            <div>Wira</div>
            <div class="ml-8">&</div>
            <div class="ml-16">Sofi</div>
        </div>

        <div class="mt-8 text-base md:text-lg">
            <p>Kepada Yth.<br>Bapak/Ibu/Saudara/i</p>
        </div>

        <p class="text-xl md:text-2xl font-bold">{{ $namaTamu->nama }}</p>


    </div>
@endsection
