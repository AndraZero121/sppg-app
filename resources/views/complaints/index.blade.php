@extends('layouts.app')

@section('content')
    <section class="rounded-3xl bg-white/80 p-8 shadow-[0_30px_80px_-50px_rgba(31,41,55,0.35)]">
        <div class="flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#ef6c37]">Aduan publik</p>
                <h1 class="mt-2 font-display text-3xl">Transparansi penanganan</h1>
            </div>
            <a class="rounded-full border border-[#1f2a25] px-5 py-2 text-sm font-semibold text-[#1f2a25] hover:bg-[#1f2a25] hover:text-white" href="{{ route('complaints.create') }}">Buat Aduan</a>
        </div>

        <div class="mt-8 space-y-4">
            @forelse ($complaints as $complaint)
                <article class="rounded-2xl border border-[#eadfd1] bg-white p-5">
                    <div class="flex flex-wrap items-center justify-between gap-3">
                        <div>
                            <p class="text-xs text-[#6b7280]">Tiket {{ $complaint->ticket }}</p>
                            <h2 class="mt-1 font-display text-xl">{{ $complaint->title }}</h2>
                        </div>
                        <span class="rounded-full bg-[#f2f4f7] px-3 py-1 text-xs font-semibold text-[#1f2a25]">{{ $complaint->status }}</span>
                    </div>
                    <p class="mt-3 text-sm text-[#6b7280]">{{ $complaint->description }}</p>
                    <div class="mt-4 flex flex-wrap gap-3 text-xs text-[#6b7280]">
                        <span class="rounded-full bg-[#f2f4f7] px-3 py-1">{{ $complaint->category }}</span>
                        <span class="rounded-full bg-[#f2f4f7] px-3 py-1">{{ $complaint->location }}</span>
                        <span class="rounded-full bg-[#f2f4f7] px-3 py-1">{{ $complaint->created_at->format('d M Y') }}</span>
                    </div>
                </article>
            @empty
                <div class="rounded-2xl border border-dashed border-[#eadfd1] p-6 text-center text-sm text-[#6b7280]">
                    Belum ada aduan publik.
                </div>
            @endforelse
        </div>
    </section>
@endsection
