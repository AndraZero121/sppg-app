@extends('layouts.app')

@section('content')
    <section class="rounded-3xl bg-white/80 p-8 shadow-[0_30px_80px_-50px_rgba(31,41,55,0.35)]">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#ef6c37]">Tim SPPG</p>
                <h1 class="mt-2 font-display text-3xl">Daftar tim penggerak gizi</h1>
            </div>
            <p class="text-sm text-[#6b7280]">Total tim: {{ $teams->count() }}</p>
        </div>

        <div class="mt-8 grid gap-4 md:grid-cols-2">
            @forelse ($teams as $team)
                <article class="flex flex-col rounded-2xl border border-[#eadfd1] bg-white overflow-hidden">
                    @if ($team->photo_path)
                        <div class="h-40 w-full overflow-hidden bg-[#f2f4f7]">
                            <img class="h-full w-full object-cover" src="{{ asset('storage/'.$team->photo_path) }}" alt="Foto tim {{ $team->name }}">
                        </div>
                    @else
                        <div class="h-40 w-full bg-gradient-to-br from-[#ef6c37]/10 to-[#1f2a25]/10 flex items-center justify-center text-[#6b7280]">
                            <span class="text-sm">Foto tidak tersedia</span>
                        </div>
                    @endif
                    <div class="p-5">
                        <p class="text-xs text-[#6b7280]">Wilayah {{ $team->coverage_area }}</p>
                        <h2 class="mt-2 font-display text-xl">{{ $team->name }}</h2>
                        <p class="mt-2 text-sm text-[#6b7280]">Ketua: {{ $team->leader_name }}</p>
                        <div class="mt-4 flex flex-wrap gap-3 text-xs text-[#6b7280]">
                            <span class="rounded-full bg-[#f2f4f7] px-3 py-1">{{ $team->members_count }} anggota</span>
                            @if ($team->phone)
                                <span class="rounded-full bg-[#f2f4f7] px-3 py-1">{{ $team->phone }}</span>
                            @endif
                        </div>
                        @if ($team->notes)
                            <p class="mt-4 text-sm text-[#5f6b7a]">{{ $team->notes }}</p>
                        @endif
                        <a class="mt-4 inline-flex items-center justify-center rounded-full bg-[#ef6c37] px-4 py-2 text-xs font-semibold text-white hover:bg-[#d95a2f]" href="{{ route('teams.show', $team) }}">Lihat Detail</a>
                    </div>
                </article>
            @empty
                <div class="rounded-2xl border border-dashed border-[#eadfd1] p-6 text-center text-sm text-[#6b7280]">
                    Belum ada data tim SPPG.
                </div>
            @endforelse
        </div>
    </section>
@endsection
