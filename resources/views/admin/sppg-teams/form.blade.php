<div class="grid gap-4 md:grid-cols-2">
    <div>
        <label class="text-xs font-semibold text-[#6b7280]" for="name">Nama tim</label>
        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="name" name="name" type="text" value="{{ old('name', $team?->name) }}">
    </div>
    <div>
        <label class="text-xs font-semibold text-[#6b7280]" for="leader_name">Ketua tim</label>
        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="leader_name" name="leader_name" type="text" value="{{ old('leader_name', $team?->leader_name) }}">
    </div>
</div>
<div class="grid gap-4 md:grid-cols-2">
    <div>
        <label class="text-xs font-semibold text-[#6b7280]" for="phone">Telepon</label>
        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="phone" name="phone" type="text" value="{{ old('phone', $team?->phone) }}">
    </div>
    <div>
        <label class="text-xs font-semibold text-[#6b7280]" for="coverage_area">Wilayah</label>
        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="coverage_area" name="coverage_area" type="text" value="{{ old('coverage_area', $team?->coverage_area) }}">
    </div>
</div>
<div class="grid gap-4 md:grid-cols-2">
    <div>
        <label class="text-xs font-semibold text-[#6b7280]" for="members_count">Jumlah anggota</label>
        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="members_count" name="members_count" type="number" min="0" value="{{ old('members_count', $team?->members_count) }}">
    </div>
    <div>
        <label class="text-xs font-semibold text-[#6b7280]" for="notes">Catatan</label>
        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="notes" name="notes" type="text" value="{{ old('notes', $team?->notes) }}">
    </div>
</div>
