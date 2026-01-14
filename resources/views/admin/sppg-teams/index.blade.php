@extends('layouts.admin', ['heading' => 'Tim SPPG'])

@section('content')
    <div class="flex flex-wrap items-center justify-between gap-4">
        <p class="text-sm text-[#6b7280]">Kelola tim SPPG dan wilayah kerja.</p>
        <a class="rounded-full bg-[#1f2a25] px-5 py-2 text-sm font-semibold text-white hover:bg-[#111a16]" href="{{ route('admin.sppg-teams.create') }}">Tambah Tim</a>
    </div>

    <div class="mt-6 overflow-hidden rounded-2xl border border-[#eadfd1] bg-white">
        <table class="w-full text-left text-sm">
            <thead class="bg-[#f8f4ec] text-xs uppercase tracking-wider text-[#6b7280]">
                <tr>
                    <th class="px-4 py-3">Nama Tim</th>
                    <th class="px-4 py-3">Ketua</th>
                    <th class="px-4 py-3">Wilayah</th>
                    <th class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-[#eadfd1]">
                @foreach ($teams as $team)
                    <tr>
                        <td class="px-4 py-3">
                            <p class="font-semibold">{{ $team->name }}</p>
                            <p class="text-xs text-[#6b7280]">{{ $team->members_count }} anggota</p>
                        </td>
                        <td class="px-4 py-3">{{ $team->leader_name }}</td>
                        <td class="px-4 py-3">{{ $team->coverage_area }}</td>
                        <td class="px-4 py-3">
                            <div class="flex flex-wrap gap-2">
                                <a class="text-sm font-semibold text-[#ef6c37]" href="{{ route('admin.sppg-teams.edit', $team) }}">Edit</a>
                                <form method="POST" action="{{ route('admin.sppg-teams.destroy', $team) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-sm font-semibold text-[#1f2a25]" type="submit" onclick="return confirm('Hapus tim ini?')">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $teams->links() }}
    </div>
@endsection
