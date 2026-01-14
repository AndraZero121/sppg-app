@extends('layouts.admin', ['heading' => 'Edit Menu'])

@section('content')
    <form class="max-w-3xl space-y-4" method="POST" action="{{ route('admin.menus.update', $menu) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('admin.menus.form', ['menu' => $menu])
        <button class="rounded-2xl bg-[#1f2a25] px-6 py-3 text-sm font-semibold text-white hover:bg-[#111a16]" type="submit">Perbarui</button>
    </form>
@endsection
