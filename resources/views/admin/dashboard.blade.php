@extends('layouts.admin', ['heading' => 'Dashboard'])

@section('content')
    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
        <div class="rounded-2xl bg-white p-5 shadow-sm">
            <p class="text-xs font-semibold text-[#6b7280]">Sekolah</p>
            <p class="mt-2 font-display text-2xl">{{ \App\Models\School::count() }}</p>
        </div>
        <div class="rounded-2xl bg-white p-5 shadow-sm">
            <p class="text-xs font-semibold text-[#6b7280]">Tim SPPG</p>
            <p class="mt-2 font-display text-2xl">{{ \App\Models\SppgTeam::count() }}</p>
        </div>
        <div class="rounded-2xl bg-white p-5 shadow-sm">
            <p class="text-xs font-semibold text-[#6b7280]">Menu</p>
            <p class="mt-2 font-display text-2xl">{{ \App\Models\Menu::count() }}</p>
        </div>
        <div class="rounded-2xl bg-white p-5 shadow-sm">
            <p class="text-xs font-semibold text-[#6b7280]">Aduan</p>
            <p class="mt-2 font-display text-2xl">{{ \App\Models\Complaint::count() }}</p>
        </div>
    </div>

    <div class="mt-8 rounded-2xl border border-[#eadfd1] bg-white p-6">
        <p class="font-display text-xl">Ringkasan cepat</p>
        <p class="mt-3 text-sm text-[#6b7280]">Gunakan menu di kiri untuk mengelola data sekolah, tim SPPG, menu harian, dan status aduan masyarakat.</p>
    </div>
@endsection
