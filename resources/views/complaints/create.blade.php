@extends('layouts.app')

@section('content')
    <section class="grid gap-8 lg:grid-cols-[1.05fr_0.95fr]">
        <div class="rounded-3xl bg-white/80 p-8 shadow-[0_30px_80px_-50px_rgba(31,41,55,0.35)]">
            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#ef6c37]">Pengaduan</p>
            <h1 class="mt-2 font-display text-3xl">Sampaikan laporan dengan cepat</h1>
            <p class="mt-3 text-sm text-[#6b7280]">Isi formulir berikut untuk membantu tim MBG merespons kebutuhan lapangan.</p>

            @if (session('ticket'))
                <div class="mt-6 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-800">
                    Aduan kamu tercatat dengan tiket <strong>{{ session('ticket') }}</strong>. Simpan nomor ini untuk tindak lanjut.
                </div>
            @endif

            <form class="mt-6 space-y-4" method="POST" action="{{ route('complaints.store') }}">
                @csrf
                <div class="grid gap-4 md:grid-cols-2">
                    <div>
                        <label class="text-xs font-semibold text-[#6b7280]" for="title">Judul aduan</label>
                        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm focus:border-[#ef6c37] focus:outline-none" id="title" name="title" type="text" value="{{ old('title') }}">
                    </div>
                    <div>
                        <label class="text-xs font-semibold text-[#6b7280]" for="category">Kategori</label>
                        <select class="mt-2 w-full rounded-2xl border border-[#eadfd1] bg-white px-4 py-3 text-sm focus:border-[#ef6c37] focus:outline-none" id="category" name="category">
                            <option value="">Pilih kategori</option>
                            @foreach (['Menu', 'Distribusi', 'Kebersihan', 'Lainnya'] as $category)
                                <option value="{{ $category }}" @selected(old('category') === $category)>{{ $category }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <label class="text-xs font-semibold text-[#6b7280]" for="location">Lokasi kejadian</label>
                    <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm focus:border-[#ef6c37] focus:outline-none" id="location" name="location" type="text" value="{{ old('location') }}">
                </div>
                <div>
                    <label class="text-xs font-semibold text-[#6b7280]" for="description">Detail aduan</label>
                    <textarea class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm focus:border-[#ef6c37] focus:outline-none" id="description" name="description" rows="5">{{ old('description') }}</textarea>
                </div>
                <div class="grid gap-4 md:grid-cols-2">
                    <div>
                        <label class="text-xs font-semibold text-[#6b7280]" for="reporter_name">Nama pelapor (opsional)</label>
                        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm focus:border-[#ef6c37] focus:outline-none" id="reporter_name" name="reporter_name" type="text" value="{{ old('reporter_name') }}">
                    </div>
                    <div>
                        <label class="text-xs font-semibold text-[#6b7280]" for="reporter_contact">Kontak (opsional)</label>
                        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm focus:border-[#ef6c37] focus:outline-none" id="reporter_contact" name="reporter_contact" type="text" value="{{ old('reporter_contact') }}">
                    </div>
                </div>
                <button class="w-full rounded-2xl bg-[#ef6c37] px-6 py-3 text-sm font-semibold text-white hover:bg-[#d65c2d]" type="submit">Kirim Aduan</button>
            </form>
        </div>

        <div class="rounded-3xl bg-[#1f2a25] p-7 text-white">
            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#ffd7a1]">Info layanan</p>
            <h2 class="mt-3 font-display text-2xl">Proses cepat, transparan</h2>
            <ul class="mt-4 space-y-3 text-sm text-white/80">
                <li>1. Aduan masuk → diverifikasi petugas.</li>
                <li>2. Tim lapangan melakukan pengecekan.</li>
                <li>3. Status pembaruan ditampilkan di daftar aduan publik.</li>
            </ul>
            <div class="mt-6 rounded-2xl bg-white/10 p-4 text-sm text-white/80">
                <p class="font-semibold text-white">Butuh respon cepat?</p>
                <p class="mt-2">Hubungi hotline MBG di 1500-888 atau WhatsApp 0812-0000-0000.</p>
            </div>
        </div>
    </section>
@endsection
