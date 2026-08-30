@extends('layouts.app')

@section('title', $product->exists ? 'Edit Product' : 'Create Product')

@section('content')
<x-navbar />
<div class="min-h-screen bg-stone-950 px-6 pb-24 pt-36 text-stone-100 md:px-16 lg:px-24">
    <div class="mx-auto max-w-4xl">
        <div class="flex items-center justify-between border-b border-stone-800 pb-8">
            <div>
                <a href="{{ route('admin.products.index') }}" class="text-xs uppercase tracking-widest text-[#8c7b6d] hover:underline">&larr; Back to Products</a>
                <h1 class="mt-2 font-display text-4xl font-black">{{ $product->exists ? 'Edit Product' : 'Create New Product' }}</h1>
            </div>
        </div>

        <form action="{{ $product->exists ? route('admin.products.update', $product->id) : route('admin.products.store') }}" method="POST" class="mt-10 space-y-8">
            @csrf
            @if($product->exists)
                @method('PUT')
            @endif

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div>
                    <label class="block text-xs uppercase tracking-wider text-stone-400">Product Title *</label>
                    <input type="text" name="name" value="{{ old('name', $product->name) }}" required class="mt-2 w-full rounded-lg border border-stone-800 bg-stone-900 px-4 py-3 text-stone-100 focus:border-[#8c7b6d] focus:outline-none">
                </div>

                <div>
                    <label class="block text-xs uppercase tracking-wider text-stone-400">Category *</label>
                    <select name="category_id" required class="mt-2 w-full rounded-lg border border-stone-800 bg-stone-900 px-4 py-3 text-stone-100 focus:border-[#8c7b6d] focus:outline-none">
                        <option value="">Select Category</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ old('category_id', $product->category_id) == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-xs uppercase tracking-wider text-stone-400">Description *</label>
                <textarea name="description" rows="4" required class="mt-2 w-full rounded-lg border border-stone-800 bg-stone-900 px-4 py-3 text-stone-100 focus:border-[#8c7b6d] focus:outline-none">{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div>
                    <label class="block text-xs uppercase tracking-wider text-stone-400">Materials</label>
                    <input type="text" name="materials" value="{{ old('materials', $product->materials) }}" placeholder="e.g. Solid Mahogany, Italian Boucle" class="mt-2 w-full rounded-lg border border-stone-800 bg-stone-900 px-4 py-3 text-stone-100 focus:border-[#8c7b6d] focus:outline-none">
                </div>

                <div>
                    <label class="block text-xs uppercase tracking-wider text-stone-400">Dimensions</label>
                    <input type="text" name="dimensions" value="{{ old('dimensions', $product->dimensions) }}" placeholder="e.g. 320cm W x 105cm D" class="mt-2 w-full rounded-lg border border-stone-800 bg-stone-900 px-4 py-3 text-stone-100 focus:border-[#8c7b6d] focus:outline-none">
                </div>

                <div>
                    <label class="block text-xs uppercase tracking-wider text-stone-400">Finish</label>
                    <input type="text" name="finish" value="{{ old('finish', $product->finish) }}" placeholder="e.g. Matte Walnut Oil" class="mt-2 w-full rounded-lg border border-stone-800 bg-stone-900 px-4 py-3 text-stone-100 focus:border-[#8c7b6d] focus:outline-none">
                </div>

                <div>
                    <label class="block text-xs uppercase tracking-wider text-stone-400">Cover Image Path</label>
                    <input type="text" name="cover_image_path" value="{{ old('cover_image_path', $product->images->first()?->path) }}" placeholder="assets/collections/living-room-main.png" class="mt-2 w-full rounded-lg border border-stone-800 bg-stone-900 px-4 py-3 text-stone-100 focus:border-[#8c7b6d] focus:outline-none">
                </div>
            </div>

            <div class="flex items-center gap-8 pt-4">
                <label class="inline-flex items-center gap-3 text-sm text-stone-300">
                    <input type="checkbox" name="featured" value="1" {{ old('featured', $product->featured) ? 'checked' : '' }} class="h-4 w-4 rounded border-stone-800 bg-stone-900 text-[#8c7b6d]">
                    <span>Featured Product</span>
                </label>
                <label class="inline-flex items-center gap-3 text-sm text-stone-300">
                    <input type="checkbox" name="published" value="1" {{ old('published', $product->published ?? true) ? 'checked' : '' }} class="h-4 w-4 rounded border-stone-800 bg-stone-900 text-[#8c7b6d]">
                    <span>Published</span>
                </label>
            </div>

            <div class="flex justify-end gap-4 border-t border-stone-800 pt-8">
                <a href="{{ route('admin.products.index') }}" class="rounded-full bg-stone-800 px-6 py-3 text-sm font-semibold text-stone-300 transition hover:bg-stone-700">Cancel</a>
                <button type="submit" class="rounded-full bg-[#8c7b6d] px-8 py-3 text-sm font-semibold text-stone-900 transition hover:bg-[#9c8c7d]">
                    {{ $product->exists ? 'Update SQLite Record' : 'Save to SQLite' }}
                </button>
            </div>
        </form>
    </div>
</div>
<x-footer />
@endsection
