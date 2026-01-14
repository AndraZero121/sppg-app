@extends('layouts.admin', ['heading' => 'Tambah Menu'])

@section('content')
    <form class="max-w-3xl space-y-4" method="POST" action="{{ route('admin.menus.store') }}" enctype="multipart/form-data">
        @csrf
        @include('admin.menus.form', ['menu' => null])
        <button class="rounded-2xl bg-[#1f2a25] px-6 py-3 text-sm font-semibold text-white hover:bg-[#111a16]" type="submit">Simpan</button>
    </form>
@endsection
