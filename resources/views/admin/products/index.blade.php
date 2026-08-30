@extends('layouts.app')

@section('title', 'Admin Dashboard — Product Management')

@section('content')
<x-navbar />
<div class="min-h-screen bg-stone-950 px-6 pb-24 pt-36 text-stone-100 md:px-16 lg:px-24">
    <div class="mx-auto max-w-7xl">
        <!-- Header Banner -->
        <div class="flex flex-col gap-6 border-b border-stone-800 pb-10 md:flex-row md:items-end md:justify-between">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[.25em] text-[#8c7b6d]">DB Engine: SQLite (Local & Production)</p>
                <h1 class="mt-2 font-display text-4xl font-black tracking-tight sm:text-5xl">Product Management</h1>
                <p class="mt-2 text-sm text-stone-400">Manage, create, and inspect products stored in your SQLite database.</p>
            </div>
            <div>
                <a href="{{ route('admin.products.create') }}" class="inline-flex items-center gap-3 rounded-full bg-[#8c7b6d] px-6 py-3 text-sm font-semibold text-stone-900 transition hover:bg-[#9c8c7d]">
                    <span>+ Add New Product</span>
                </a>
            </div>
        </div>

        @if(session('success'))
            <div class="my-6 rounded-lg border border-emerald-500/30 bg-emerald-950/40 p-4 text-emerald-300">
                {{ session('success') }}
            </div>
        @endif

        <!-- Stats Cards -->
        <div class="my-10 grid grid-cols-1 gap-6 sm:grid-cols-3">
            <div class="rounded-xl border border-stone-800 bg-stone-900/60 p-6">
                <p class="text-xs uppercase tracking-widest text-stone-400">Total Products</p>
                <p class="mt-2 font-display text-4xl font-bold text-stone-100">{{ $products->count() }}</p>
            </div>
            <div class="rounded-xl border border-stone-800 bg-stone-900/60 p-6">
                <p class="text-xs uppercase tracking-widest text-stone-400">Active Categories</p>
                <p class="mt-2 font-display text-4xl font-bold text-[#8c7b6d]">{{ $categoriesCount }}</p>
            </div>
            <div class="rounded-xl border border-stone-800 bg-stone-900/60 p-6">
                <p class="text-xs uppercase tracking-widest text-stone-400">Database Driver</p>
                <p class="mt-2 font-display text-2xl font-bold text-emerald-400">SQLite Connected</p>
            </div>
        </div>

        <!-- Product Table -->
        <div class="overflow-hidden rounded-xl border border-stone-800 bg-stone-900/40">
            <table class="w-full text-left text-sm text-stone-300">
                <thead class="border-b border-stone-800 bg-stone-900/80 text-xs uppercase tracking-wider text-stone-400">
                    <tr>
                        <th class="px-6 py-4">Image</th>
                        <th class="px-6 py-4">Title</th>
                        <th class="px-6 py-4">Category</th>
                        <th class="px-6 py-4">Dimensions</th>
                        <th class="px-6 py-4 text-center">Featured</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-800/60">
                    @forelse($products as $prod)
                    <tr class="transition hover:bg-stone-900/60">
                        <td class="px-6 py-4">
                            @if($prod->images->first())
                                <img src="{{ asset($prod->images->first()->path) }}" alt="{{ $prod->name }}" class="h-12 w-16 rounded object-cover">
                            @else
                                <div class="flex h-12 w-16 items-center justify-center rounded bg-stone-800 text-xs text-stone-500">No Image</div>
                            @endif
                        </td>
                        <td class="px-6 py-4 font-semibold text-stone-100">
                            {{ $prod->name }}
                            <p class="text-xs text-stone-500">{{ $prod->slug }}</p>
                        </td>
                        <td class="px-6 py-4">
                            <span class="rounded bg-stone-800 px-2.5 py-1 text-xs text-[#8c7b6d]">{{ $prod->category ? $prod->category->name : 'Uncategorized' }}</span>
                        </td>
                        <td class="px-6 py-4 text-xs text-stone-400">{{ $prod->dimensions ?? 'N/A' }}</td>
                        <td class="px-6 py-4 text-center">
                            @if($prod->featured)
                                <span class="rounded-full bg-amber-500/20 px-2.5 py-0.5 text-xs text-amber-400">Yes</span>
                            @else
                                <span class="text-xs text-stone-600">No</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-3">
                                <a href="{{ route('admin.products.edit', $prod->id) }}" class="rounded bg-stone-800 px-3 py-1.5 text-xs text-stone-200 transition hover:bg-stone-700">Edit</a>
                                <form action="{{ route('admin.products.destroy', $prod->id) }}" method="POST" onsubmit="return confirm('Delete this product from SQLite database?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="rounded bg-red-950/60 px-3 py-1.5 text-xs text-red-400 transition hover:bg-red-900/80">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-12 text-center text-stone-500">
                            No products found in SQLite database. Click "+ Add New Product" to seed data manually or run migrations.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<x-footer />
@endsection
