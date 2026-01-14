@extends('layouts.app')

@section('content')
    <section class="grid gap-8 lg:grid-cols-[1.1fr_0.9fr]">
        <div class="rounded-3xl bg-white/80 p-8 shadow-[0_30px_80px_-50px_rgba(31,41,55,0.35)]">
            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#ef6c37]">Detail gizi</p>
            <h1 class="mt-2 font-display text-3xl">{{ $menu->name }}</h1>
            <p class="mt-3 text-sm text-[#6b7280]">{{ $menu->served_on->format('d M Y') }}</p>
            <p class="mt-5 text-base text-[#5f6b7a]">{{ $menu->description ?? 'Menu bergizi lengkap untuk kebutuhan harian siswa.' }}</p>

            <div class="mt-8 grid gap-4 sm:grid-cols-2">
                <div class="rounded-2xl border border-[#eadfd1] bg-white p-4">
                    <p class="text-xs text-[#6b7280]">Kalori</p>
                    <p class="mt-2 font-display text-2xl">{{ $menu->calories }} kkal</p>
                </div>
                <div class="rounded-2xl border border-[#eadfd1] bg-white p-4">
                    <p class="text-xs text-[#6b7280]">Protein</p>
                    <p class="mt-2 font-display text-2xl">{{ $menu->protein }} g</p>
                </div>
                <div class="rounded-2xl border border-[#eadfd1] bg-white p-4">
                    <p class="text-xs text-[#6b7280]">Karbohidrat</p>
                    <p class="mt-2 font-display text-2xl">{{ $menu->carbs }} g</p>
                </div>
                <div class="rounded-2xl border border-[#eadfd1] bg-white p-4">
                    <p class="text-xs text-[#6b7280]">Lemak</p>
                    <p class="mt-2 font-display text-2xl">{{ $menu->fat }} g</p>
                </div>
                <div class="rounded-2xl border border-[#eadfd1] bg-white p-4">
                    <p class="text-xs text-[#6b7280]">Serat</p>
                    <p class="mt-2 font-display text-2xl">{{ $menu->fiber }} g</p>
                </div>
            </div>

            <a class="mt-8 inline-flex items-center justify-center rounded-full border border-[#1f2a25] px-6 py-3 text-sm font-semibold text-[#1f2a25] hover:bg-[#1f2a25] hover:text-white" href="{{ route('menus.history') }}">Kembali ke Riwayat Menu</a>
        </div>

        <div class="rounded-3xl bg-[#1f2a25] p-6 text-white">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[#ffd7a1]">Foto menu</p>
            <div class="mt-4 overflow-hidden rounded-2xl bg-white/10">
                @if ($menu->photo_path)
                    <img class="h-72 w-full object-cover" src="{{ asset('storage/'.$menu->photo_path) }}" alt="Foto menu {{ $menu->name }}">
                @else
                    <div class="flex h-72 items-center justify-center text-sm text-white/70">
                        Foto belum tersedia.
                    </div>
                @endif
            </div>
            <div class="mt-6 rounded-2xl bg-white/10 p-4 text-sm text-white/80">
                <p class="font-semibold text-white">Catatan gizi</p>
                <p class="mt-2">Menu ini dirancang untuk memenuhi kebutuhan energi harian dan menjaga keseimbangan makro nutrisi.</p>
            </div>
        </div>
    </section>
@endsection
