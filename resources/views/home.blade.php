@extends('layouts.app')

@section('content')
    <section class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr]">
        <div class="rounded-3xl bg-white/80 p-8 shadow-[0_30px_80px_-50px_rgba(31,41,55,0.45)]">
            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#ef6c37]">Program nasional</p>
            <h1 class="mt-4 font-display text-4xl leading-tight text-[#1f2937] md:text-5xl">
                Layanan menu gizi harian yang tertata, transparan, dan terukur.
            </h1>
            <p class="mt-5 text-lg text-[#5f6b7a]">
                Pantau menu makan bergizi gratis hari ini, komposisi gizi, hingga sejarah distribusi tanpa harus menunggu laporan manual.
            </p>
            <div class="mt-8 flex flex-wrap gap-4">
                <a class="rounded-full bg-[#1f2a25] px-6 py-3 text-sm font-semibold text-white hover:bg-[#111a16]" href="{{ route('menus.history') }}">Lihat Riwayat Menu</a>
                <a class="rounded-full border border-[#1f2a25] px-6 py-3 text-sm font-semibold text-[#1f2a25] hover:bg-[#1f2a25] hover:text-white" href="{{ route('complaints.create') }}">Ajukan Pengaduan</a>
            </div>
            <div class="mt-10 grid gap-4 md:grid-cols-3">
                <div class="rounded-2xl bg-[#fef4e8] p-4">
                    <p class="text-xs font-semibold text-[#ef6c37]">Sekolah Aktif</p>
                    <p class="mt-2 font-display text-2xl">+120</p>
                </div>
                <div class="rounded-2xl bg-[#e7f4f0] p-4">
                    <p class="text-xs font-semibold text-[#2a4b3f]">Tim SPPG</p>
                    <p class="mt-2 font-display text-2xl">24 Tim</p>
                </div>
                <div class="rounded-2xl bg-[#f2eefb] p-4">
                    <p class="text-xs font-semibold text-[#5f4b8b]">Menu Tersaji</p>
                    <p class="mt-2 font-display text-2xl">1.230+</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-6">
            <div class="rounded-3xl bg-[#1f2a25] p-7 text-white shadow-[0_20px_50px_-40px_rgba(31,41,55,0.8)]">
                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-[#ffd7a1]">Menu hari ini</p>
                @if ($todayMenu)
                    <h2 class="mt-3 font-display text-2xl">{{ $todayMenu->name }}</h2>
                    <p class="mt-3 text-sm text-white/80">{{ $todayMenu->description ?? 'Menu bergizi lengkap untuk mendukung energi siswa.' }}</p>
                    <div class="mt-5 grid grid-cols-2 gap-3 text-xs">
                        <div class="rounded-2xl bg-white/10 px-3 py-2">
                            <p class="text-white/60">Kalori</p>
                            <p class="font-semibold">{{ $todayMenu->calories }} kkal</p>
                        </div>
                        <div class="rounded-2xl bg-white/10 px-3 py-2">
                            <p class="text-white/60">Protein</p>
                            <p class="font-semibold">{{ $todayMenu->protein }} g</p>
                        </div>
                        <div class="rounded-2xl bg-white/10 px-3 py-2">
                            <p class="text-white/60">Karbo</p>
                            <p class="font-semibold">{{ $todayMenu->carbs }} g</p>
                        </div>
                        <div class="rounded-2xl bg-white/10 px-3 py-2">
                            <p class="text-white/60">Lemak</p>
                            <p class="font-semibold">{{ $todayMenu->fat }} g</p>
                        </div>
                    </div>
                    <a class="mt-6 inline-flex items-center justify-center rounded-full bg-white px-5 py-2 text-sm font-semibold text-[#1f2a25] hover:bg-[#ffd7a1]" href="{{ route('menus.show', $todayMenu) }}">Lihat Detail Gizi</a>
                @else
                    <h2 class="mt-3 font-display text-2xl">Belum ada menu hari ini</h2>
                    <p class="mt-3 text-sm text-white/80">Tim gizi sedang menyiapkan pembaruan menu. Silakan cek kembali beberapa saat lagi.</p>
                @endif
            </div>

            <div class="rounded-3xl bg-white/80 p-6">
                <p class="text-sm font-semibold text-[#1f2a25]">Menu terbaru</p>
                <div class="mt-4 space-y-4">
                    @foreach ($latestMenus as $menu)
                        <div class="flex items-center justify-between rounded-2xl border border-[#eadfd1] bg-white px-4 py-3">
                            <div>
                                <p class="text-xs text-[#6b7280]">{{ $menu->served_on->format('d M Y') }}</p>
                                <p class="font-semibold">{{ $menu->name }}</p>
                            </div>
                            <a class="text-sm font-semibold text-[#ef6c37]" href="{{ route('menus.show', $menu) }}">Detail</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
