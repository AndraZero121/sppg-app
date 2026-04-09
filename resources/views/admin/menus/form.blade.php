<div class="grid gap-4 md:grid-cols-2">
    <div>
        <label class="text-xs font-semibold text-[#6b7280]" for="served_on">Tanggal</label>
        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="served_on" name="served_on" type="date" value="{{ old('served_on', $menu?->served_on?->format('Y-m-d')) }}">
    </div>
    <div>
        <label class="text-xs font-semibold text-[#6b7280]" for="name">Nama menu</label>
        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="name" name="name" type="text" value="{{ old('name', $menu?->name) }}">
    </div>
</div>
<div>
    <label class="text-xs font-semibold text-[#6b7280]" for="description">Deskripsi</label>
    <textarea class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="description" name="description" rows="3">{{ old('description', $menu?->description) }}</textarea>
</div>
<div class="grid gap-4 md:grid-cols-2">
    <div>
        <label class="text-xs font-semibold text-[#6b7280]" for="calories">Kalori (kkal)</label>
        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="calories" name="calories" type="number" min="0" value="{{ old('calories', $menu?->calories) }}">
    </div>
    <div>
        <label class="text-xs font-semibold text-[#6b7280]" for="protein">Protein (g)</label>
        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="protein" name="protein" type="number" min="0" step="0.01" value="{{ old('protein', $menu?->protein) }}">
    </div>
</div>
<div class="grid gap-4 md:grid-cols-3">
    <div>
        <label class="text-xs font-semibold text-[#6b7280]" for="fat">Lemak (g)</label>
        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="fat" name="fat" type="number" min="0" step="0.01" value="{{ old('fat', $menu?->fat) }}">
    </div>
    <div>
        <label class="text-xs font-semibold text-[#6b7280]" for="carbs">Karbo (g)</label>
        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="carbs" name="carbs" type="number" min="0" step="0.01" value="{{ old('carbs', $menu?->carbs) }}">
    </div>
    <div>
        <label class="text-xs font-semibold text-[#6b7280]" for="fiber">Serat (g)</label>
        <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] px-4 py-3 text-sm" id="fiber" name="fiber" type="number" min="0" step="0.01" value="{{ old('fiber', $menu?->fiber) }}">
    </div>
</div>
<div>
    <label class="text-xs font-semibold text-[#6b7280]" for="photo">Foto menu</label>
    <input class="mt-2 w-full rounded-2xl border border-[#eadfd1] bg-white px-4 py-3 text-sm" id="photo" name="photo" type="file" accept="image/*">
    @if ($menu?->photo_path)
        <div class="mt-4">
            <p class="mb-2 text-xs font-semibold text-[#6b7280]">Preview Foto Saat Ini:</p>
            <img class="h-40 w-40 rounded-lg object-cover" src="{{ asset('storage/' . $menu->photo_path) }}" alt="{{ $menu->name }}">
        </div>
    @endif
</div>
<div class="flex items-center gap-2">
    <input class="rounded border-[#eadfd1]" id="is_published" name="is_published" type="checkbox" value="1" @checked(old('is_published', $menu?->is_published ?? true))>
    <label class="text-sm text-[#6b7280]" for="is_published">Publikasikan menu</label>
</div>
