@extends('layouts.admin', ['heading' => 'Edit Sekolah'])

@section('content')
    <form class="max-w-3xl space-y-4" method="POST" action="{{ route('admin.schools.update', $school) }}">
        @csrf
        @method('PUT')
        @include('admin.schools.form', ['school' => $school])
        <button class="rounded-2xl bg-[#1f2a25] px-6 py-3 text-sm font-semibold text-white hover:bg-[#111a16]" type="submit">Perbarui</button>
    </form>
@endsection
