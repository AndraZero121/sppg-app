@extends('layouts.admin', ['heading' => 'Edit Aduan'])

@section('content')
    <form class="max-w-3xl space-y-4" method="POST" action="{{ route('admin.complaints.update', $complaint) }}">
        @csrf
        @method('PUT')
        <div>
            <label class="text-xs font-semibold text-[#6b7280]" for="title">Judul</label>
            <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="title" name="title" type="text" value="{{ old('title', $complaint->title) }}">
        </div>
        <div>
            <label class="text-xs font-semibold text-[#6b7280]" for="description">Detail aduan</label>
            <textarea class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="description" name="description" rows="4">{{ old('description', $complaint->description) }}</textarea>
        </div>
        <div class="grid gap-4 md:grid-cols-2">
            <div>
                <label class="text-xs font-semibold text-[#6b7280]" for="category">Kategori</label>
                <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="category" name="category" type="text" value="{{ old('category', $complaint->category) }}">
            </div>
            <div>
                <label class="text-xs font-semibold text-[#6b7280]" for="location">Lokasi</label>
                <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="location" name="location" type="text" value="{{ old('location', $complaint->location) }}">
            </div>
        </div>
        <div class="grid gap-4 md:grid-cols-2">
            <div>
                <label class="text-xs font-semibold text-[#6b7280]" for="reporter_name">Nama pelapor</label>
                <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="reporter_name" name="reporter_name" type="text" value="{{ old('reporter_name', $complaint->reporter_name) }}">
            </div>
            <div>
                <label class="text-xs font-semibold text-[#6b7280]" for="reporter_contact">Kontak pelapor</label>
                <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="reporter_contact" name="reporter_contact" type="text" value="{{ old('reporter_contact', $complaint->reporter_contact) }}">
            </div>
        </div>
        <div>
            <label class="text-xs font-semibold text-[#6b7280]" for="status">Status</label>
            <select class="mt-2 w-full rounded-2xl border border-[#eadfd1] bg-white px-4 py-3 text-sm" id="status" name="status">
                @foreach (['Pending', 'Diproses', 'Selesai'] as $status)
                    <option value="{{ $status }}" @selected(old('status', $complaint->status) === $status)>{{ $status }}</option>
                @endforeach
            </select>
        </div>
        <button class="rounded-2xl bg-[#1f2a25] px-6 py-3 text-sm font-semibold text-white hover:bg-[#111a16]" type="submit">Perbarui</button>
    </form>
@endsection
