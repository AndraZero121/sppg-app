@extends('layouts.app')

@section('content')
    <section class="mx-auto max-w-xl rounded-3xl bg-white/80 p-8 shadow-[0_30px_80px_-50px_rgba(31,41,55,0.35)]">
        <p class="text-sm font-semibold uppercase tracking-[0.3em] text-[#ef6c37]">Daftar</p>
        <h1 class="mt-2 font-display text-3xl">Buat akun petugas gizi</h1>
        <p class="mt-3 text-sm text-[#6b7280]">Akun baru akan otomatis menjadi petugas gizi.</p>

        <form class="mt-6 space-y-4" method="POST" action="{{ route('register.store') }}">
            @csrf
            <div>
                <label class="text-xs font-semibold text-[#6b7280]" for="name">Nama</label>
                <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm focus:border-[#ef6c37] focus:outline-none" id="name" name="name" type="text" value="{{ old('name') }}">
            </div>
            <div>
                <label class="text-xs font-semibold text-[#6b7280]" for="email">Email</label>
                <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm focus:border-[#ef6c37] focus:outline-none" id="email" name="email" type="email" value="{{ old('email') }}">
            </div>
            <div>
                <label class="text-xs font-semibold text-[#6b7280]" for="password">Password</label>
                <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm focus:border-[#ef6c37] focus:outline-none" id="password" name="password" type="password">
            </div>
            <div>
                <label class="text-xs font-semibold text-[#6b7280]" for="password_confirmation">Konfirmasi password</label>
                <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm focus:border-[#ef6c37] focus:outline-none" id="password_confirmation" name="password_confirmation" type="password">
            </div>
            <button class="w-full rounded-2xl bg-[#1f2a25] px-6 py-3 text-sm font-semibold text-white hover:bg-[#111a16]" type="submit">Daftar</button>
        </form>
    </section>
@endsection
