@extends('layouts.app')

@section('title', $category->name . ' — ABog')
@section('meta_description', Str::limit($category->description, 150))

@section('content')
    <x-navbar />

    <section class="relative bg-[#f5f3ef] px-6 py-24 md:px-16 lg:px-24 text-stone-900">
        <div class="max-w-7xl mx-auto">
            <p class="text-[#8c7b6d] font-sans font-semibold text-xs tracking-[0.2em] uppercase">{{ strtoupper($category->name) }}</p>
            <h1 class="font-display font-black text-5xl md:text-6xl mt-6">{{ $category->name }}</h1>
            <p class="mt-6 max-w-2xl text-stone-600">{{ $category->description }}</p>
        </div>
    </section>

    <section class="px-6 py-12 md:px-16 lg:px-24">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                @foreach($products as $product)
                    <div class="md:col-span-6 lg:col-span-4">
                        <article class="rounded-lg overflow-hidden bg-white shadow-md">
                            <a href="{{ route('collections.product', [$category->slug, $product->slug]) }}" class="block">
                                <div class="h-80 bg-stone-200 overflow-hidden">
                                    @php $img = $product->images->first(); @endphp
                                    @if($img && $img->path)
                                        <img src="{{ asset($img->path) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center text-stone-400">No image</div>
                                    @endif
                                </div>
                                <div class="p-4">
                                    <h3 class="font-display font-semibold text-lg">{{ $product->name }}</h3>
                                    <p class="text-sm text-stone-500 mt-2">{{ Str::limit($product->description, 140) }}</p>
                                    <div class="mt-4">
                                        <button class="inline-flex items-center gap-3 rounded-full bg-[#8c7b6d] px-4 py-2 text-white">REQUEST QUOTE</button>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-footer />
@endsection
