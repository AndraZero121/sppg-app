@extends('layouts.app')

@section('content')
    <section class="grid gap-8 lg:grid-cols-[1.1fr_0.9fr]">
        <div class="rounded-3xl bg-white/80 p-8 shadow-[0_30px_80px_-50px_rgba(31,41,55,0.35)]">
            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#ef6c37]">Tim Penggerak Gizi</p>
            <h1 class="mt-2 font-display text-3xl">{{ $team->name }}</h1>
            <p class="mt-3 text-sm text-[#6b7280]">Wilayah {{ $team->coverage_area }}</p>
            <p class="mt-5 text-base text-[#5f6b7a]">{{ $team->notes ?? 'Tim penggerak gizi yang berdedikasi meningkatkan kesehatan dan gizi masyarakat.' }}</p>

            <div class="mt-8 grid gap-4 sm:grid-cols-2">
                <div class="rounded-2xl border border-[#eadfd1] bg-white p-4">
                    <p class="text-xs text-[#6b7280]">Ketua Tim</p>
                    <p class="mt-2 font-display text-lg">{{ $team->leader_name }}</p>
                </div>
                <div class="rounded-2xl border border-[#eadfd1] bg-white p-4">
                    <p class="text-xs text-[#6b7280]">Jumlah Anggota</p>
                    <p class="mt-2 font-display text-2xl">{{ $team->members_count }}</p>
                </div>
                @if ($team->phone)
                    <div class="rounded-2xl border border-[#eadfd1] bg-white p-4 sm:col-span-2">
                        <p class="text-xs text-[#6b7280]">Kontak</p>
                        <p class="mt-2 font-display text-lg">{{ $team->phone }}</p>
                    </div>
                @endif
            </div>

            <a class="mt-8 inline-flex items-center justify-center rounded-full border border-[#1f2a25] px-6 py-3 text-sm font-semibold text-[#1f2a25] hover:bg-[#1f2a25] hover:text-white" href="{{ route('teams.index') }}">Kembali ke Daftar Tim</a>
        </div>

        <div class="rounded-3xl bg-[#1f2a25] p-6 text-white">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-[#ffd7a1]">Foto Tim</p>
            <div class="mt-4 overflow-hidden rounded-2xl bg-white/10">
                @if ($team->photo_path)
                    <img class="h-72 w-full object-cover" src="{{ asset('storage/'.$team->photo_path) }}" alt="Foto tim {{ $team->name }}">
                @else
                    <div class="flex h-72 items-center justify-center text-sm text-white/70">
                        Foto belum tersedia.
                    </div>
                @endif
            </div>
            <div class="mt-6 rounded-2xl bg-white/10 p-4 text-sm text-white/80">
                <p class="font-semibold text-white">Tentang Tim</p>
                <p class="mt-2">Tim SPPG bekerja untuk meningkatkan program gizi di wilayah {{ $team->coverage_area }} dengan dedikasi dan komitmen tinggi.</p>
            </div>
        </div>
    </section>
@endsection
