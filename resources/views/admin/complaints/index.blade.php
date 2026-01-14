@extends('layouts.admin', ['heading' => 'Aduan Publik'])

@section('content')
    <div class="rounded-2xl border border-[#eadfd1] bg-white">
        <table class="w-full text-left text-sm">
            <thead class="bg-[#f8f4ec] text-xs uppercase tracking-wider text-[#6b7280]">
                <tr>
                    <th class="px-4 py-3">Tiket</th>
                    <th class="px-4 py-3">Judul</th>
                    <th class="px-4 py-3">Kategori</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-[#eadfd1]">
                @foreach ($complaints as $complaint)
                    <tr>
                        <td class="px-4 py-3">{{ $complaint->ticket }}</td>
                        <td class="px-4 py-3">
                            <p class="font-semibold">{{ $complaint->title }}</p>
                            <p class="text-xs text-[#6b7280]">{{ $complaint->location }}</p>
                        </td>
                        <td class="px-4 py-3">{{ $complaint->category }}</td>
                        <td class="px-4 py-3">
                            <span class="rounded-full bg-[#f2f4f7] px-3 py-1 text-xs font-semibold">
                                {{ $complaint->status }}
                            </span>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex flex-wrap gap-2">
                                <a class="text-sm font-semibold text-[#ef6c37]" href="{{ route('admin.complaints.edit', $complaint) }}">Edit</a>
                                <form method="POST" action="{{ route('admin.complaints.destroy', $complaint) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-sm font-semibold text-[#1f2a25]" type="submit" onclick="return confirm('Hapus aduan ini?')">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $complaints->links() }}
    </div>
@endsection
