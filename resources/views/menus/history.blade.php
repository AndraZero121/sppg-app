@extends('layouts.app')

@section('content')
    <section class="rounded-3xl bg-white/80 p-8 shadow-[0_30px_80px_-50px_rgba(31,41,55,0.35)]">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#ef6c37]">Riwayat menu</p>
                <h1 class="mt-2 font-display text-3xl">Jejak menu bergizi</h1>
            </div>
            <input
                class="w-full rounded-full border border-[#eadfd1] bg-white px-5 py-3 text-sm focus:border-[#ef6c37] focus:outline-none md:max-w-xs"
                data-menu-filter
                placeholder="Cari menu, contoh: ayam, sayur..."
                type="text"
            >
        </div>

        <div class="mt-8 grid gap-4 md:grid-cols-2">
            @forelse ($menus as $menu)
                <article
                    class="flex flex-col justify-between rounded-2xl border border-[#eadfd1] bg-white p-5"
                    data-menu-item
                    data-menu-text="{{ strtolower($menu->name.' '.$menu->description) }}"
                >
                    <div>
                        <p class="text-xs text-[#6b7280]">{{ $menu->served_on->format('d M Y') }}</p>
                        <h2 class="mt-2 font-display text-xl">{{ $menu->name }}</h2>
                        <p class="mt-2 text-sm text-[#6b7280]">{{ $menu->description ?? 'Menu bergizi seimbang untuk mendukung aktivitas harian.' }}</p>
                    </div>
                    <div class="mt-4 flex items-center justify-between text-xs text-[#6b7280]">
                        <span>{{ $menu->calories }} kkal</span>
                        <a class="text-sm font-semibold text-[#ef6c37]" href="{{ route('menus.show', $menu) }}">Detail gizi</a>
                    </div>
                </article>
            @empty
                <div class="rounded-2xl border border-dashed border-[#eadfd1] p-6 text-center text-sm text-[#6b7280]">
                    Belum ada menu tersimpan.
                </div>
            @endforelse
        </div>
    </section>
@endsection
