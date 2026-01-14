<div class="grid gap-4 md:grid-cols-2">
    <div>
        <label class="text-xs font-semibold text-[#6b7280]" for="name">Nama sekolah</label>
        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="name" name="name" type="text" value="{{ old('name', $school?->name) }}">
    </div>
    <div>
        <label class="text-xs font-semibold text-[#6b7280]" for="npsn">NPSN</label>
        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="npsn" name="npsn" type="text" value="{{ old('npsn', $school?->npsn) }}">
    </div>
</div>
<div>
    <label class="text-xs font-semibold text-[#6b7280]" for="address">Alamat</label>
    <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="address" name="address" type="text" value="{{ old('address', $school?->address) }}">
</div>
<div class="grid gap-4 md:grid-cols-2">
    <div>
        <label class="text-xs font-semibold text-[#6b7280]" for="district">Kecamatan</label>
        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="district" name="district" type="text" value="{{ old('district', $school?->district) }}">
    </div>
    <div>
        <label class="text-xs font-semibold text-[#6b7280]" for="city">Kota</label>
        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="city" name="city" type="text" value="{{ old('city', $school?->city) }}">
    </div>
</div>
<div class="grid gap-4 md:grid-cols-2">
    <div>
        <label class="text-xs font-semibold text-[#6b7280]" for="students_count">Jumlah siswa</label>
        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="students_count" name="students_count" type="number" min="0" value="{{ old('students_count', $school?->students_count) }}">
    </div>
    <div>
        <label class="text-xs font-semibold text-[#6b7280]" for="contact_name">Kontak PIC</label>
        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="contact_name" name="contact_name" type="text" value="{{ old('contact_name', $school?->contact_name) }}">
    </div>
</div>
<div class="grid gap-4 md:grid-cols-2">
    <div>
        <label class="text-xs font-semibold text-[#6b7280]" for="contact_phone">Telepon PIC</label>
        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="contact_phone" name="contact_phone" type="text" value="{{ old('contact_phone', $school?->contact_phone) }}">
    </div>
    <div class="flex items-center gap-2 pt-6">
        <input class="rounded border-[#eadfd1]" id="is_active" name="is_active" type="checkbox" value="1" @checked(old('is_active', $school?->is_active ?? true))>
        <label class="text-sm text-[#6b7280]" for="is_active">Aktif</label>
    </div>
</div>
