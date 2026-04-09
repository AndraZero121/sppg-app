<div class="mt-8 rounded-2xl border border-[#eadfd1] bg-white p-6">
    <div class="mb-6 flex items-center justify-between">
        <p class="font-display text-xl">Tim SPPG</p>
        <a class="text-sm font-semibold text-[#ef6c37] hover:text-[#d95a2f]" href="{{ route('admin.sppg-teams.index') }}">Kelola Semua</a>
    </div>

    <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
        @forelse ($sppgTeams as $team)
            <div class="rounded-xl border border-[#eadfd1] p-4">
                <div class="mb-4 overflow-hidden rounded-lg bg-[#f2f4f7]">
                    @if ($team->photo_path)
                        <img class="h-40 w-full object-cover" src="{{ asset('storage/'.$team->photo_path) }}" alt="Foto tim {{ $team->name }}">
                    @else
                        <div class="flex h-40 items-center justify-center text-sm text-[#6b7280]">
                            <span>Foto tidak ada</span>
                        </div>
                    @endif
                </div>
                <p class="font-display text-sm font-semibold text-[#1f2a25]">{{ $team->name }}</p>
                <p class="mt-1 text-xs text-[#6b7280]">Ketua: {{ $team->leader_name }}</p>
                <p class="mt-2 text-xs text-[#6b7280]">{{ $team->members_count }} anggota</p>
            </div>
        @empty
            <div class="col-span-full rounded-lg border border-dashed border-[#eadfd1] p-6 text-center text-sm text-[#6b7280]">
                Belum ada data tim SPPG.
            </div>
        @endforelse
    </div>
</div>
