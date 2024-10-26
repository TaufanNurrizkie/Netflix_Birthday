@extends('layout')

@section('content')
@vite('resources/css/app.css')
<div class="relative h-screen overflow-hidden">
<div class="container mx-auto py-8 mt-4">
    <div class="text-1xl font-bold mt-4 mb-2" >More to Explore: Luna Safira Gusri</div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
        @foreach ($images as $image)
            <div class="overflow-hidden rounded-lg shadow-lg">
                <img src="{{ asset('storage/images/' . $image) }}" alt="Gallery Image" class="w-full h-auto object-cover transition-transform transform hover:scale-105">
            </div>
        @endforeach
    </div>
</div>
</div>

@endsection