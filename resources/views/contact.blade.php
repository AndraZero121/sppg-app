@extends('layouts.app')

@section('content')
    <section class="grid gap-8 lg:grid-cols-[1.1fr_0.9fr]">
        <div class="rounded-3xl bg-white/80 p-8 shadow-[0_30px_80px_-50px_rgba(31,41,55,0.35)]">
            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#ef6c37]">Kontak & lokasi</p>
            <h1 class="mt-2 font-display text-3xl">Terhubung langsung dengan tim MBG</h1>
            <p class="mt-3 text-sm text-[#6b7280]">Dukung koordinasi lapangan melalui kanal resmi kami.</p>

            <div class="mt-6 grid gap-4 md:grid-cols-2">
                <a class="rounded-2xl border border-[#eadfd1] bg-white px-5 py-4 text-sm font-semibold text-[#1f2a25] hover:border-[#ef6c37]" href="tel:1500888">Hubungi Hotline</a>
                <a class="rounded-2xl border border-[#eadfd1] bg-white px-5 py-4 text-sm font-semibold text-[#1f2a25] hover:border-[#ef6c37]" href="mailto:halo@mbg.go.id">Kirim Email</a>
                <a class="rounded-2xl border border-[#eadfd1] bg-white px-5 py-4 text-sm font-semibold text-[#1f2a25] hover:border-[#ef6c37]" href="https://wa.me/6281200000000">WhatsApp Center</a>
                <a class="rounded-2xl border border-[#eadfd1] bg-white px-5 py-4 text-sm font-semibold text-[#1f2a25] hover:border-[#ef6c37]" href="{{ route('complaints.create') }}">Buat Pengaduan</a>
            </div>

            <div class="mt-8 rounded-2xl border border-[#eadfd1] bg-white p-5 text-sm text-[#6b7280]">
                <p class="font-semibold text-[#1f2a25]">Jam layanan</p>
                <p class="mt-2">Senin - Jumat: 08.00 - 17.00 WIB</p>
                <p>Sabtu: 08.00 - 12.00 WIB</p>
            </div>
        </div>

        <div class="overflow-hidden rounded-3xl border border-[#eadfd1] bg-white shadow-[0_20px_50px_-40px_rgba(31,41,55,0.5)]">
            <iframe
                class="h-full min-h-[22rem] w-full"
                loading="lazy"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253840.4915583231!2d106.68943122363868!3d-6.229740086297738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e50d7b2a57%3A0x3027a76e352bcaa!2sJakarta!5e0!3m2!1sen!2sid!4v1712500000000"
                style="border:0;"
                allowfullscreen=""
                referrerpolicy="no-referrer-when-downgrade"
                title="Lokasi MBG"
            ></iframe>
        </div>
    </section>
@endsection
