@extends('layouts.admin', ['heading' => 'Data Sekolah'])

@section('content')
    <div class="flex flex-wrap items-center justify-between gap-4">
        <div>
            <p class="text-sm text-[#6b7280]">Kelola sekolah penerima MBG.</p>
        </div>
        <a class="rounded-full bg-[#1f2a25] px-5 py-2 text-sm font-semibold text-white hover:bg-[#111a16]" href="{{ route('admin.schools.create') }}">Tambah Sekolah</a>
    </div>

    <div class="mt-6 overflow-hidden rounded-2xl border border-[#eadfd1] bg-white">
        <table class="w-full text-left text-sm">
            <thead class="bg-[#f8f4ec] text-xs uppercase tracking-wider text-[#6b7280]">
                <tr>
                    <th class="px-4 py-3">Nama</th>
                    <th class="px-4 py-3">Kota</th>
                    <th class="px-4 py-3">Siswa</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-[#eadfd1]">
                @foreach ($schools as $school)
                    <tr>
                        <td class="px-4 py-3">
                            <p class="font-semibold">{{ $school->name }}</p>
                            <p class="text-xs text-[#6b7280]">{{ $school->district }}</p>
                        </td>
                        <td class="px-4 py-3">{{ $school->city }}</td>
                        <td class="px-4 py-3">{{ $school->students_count }}</td>
                        <td class="px-4 py-3">
                            <span class="rounded-full bg-[#f2f4f7] px-3 py-1 text-xs font-semibold">
                                {{ $school->is_active ? 'Aktif' : 'Nonaktif' }}
                            </span>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex flex-wrap gap-2">
                                <a class="text-sm font-semibold text-[#ef6c37]" href="{{ route('admin.schools.edit', $school) }}">Edit</a>
                                <form method="POST" action="{{ route('admin.schools.destroy', $school) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-sm font-semibold text-[#1f2a25]" type="submit" onclick="return confirm('Hapus sekolah ini?')">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $schools->links() }}
    </div>
@endsection
