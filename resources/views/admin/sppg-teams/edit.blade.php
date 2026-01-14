@extends('layouts.admin', ['heading' => 'Edit Tim SPPG'])

@section('content')
    <form class="max-w-3xl space-y-4" method="POST" action="{{ route('admin.sppg-teams.update', $team) }}">
        @csrf
        @method('PUT')
        @include('admin.sppg-teams.form', ['team' => $team])
        <button class="rounded-2xl bg-[#1f2a25] px-6 py-3 text-sm font-semibold text-white hover:bg-[#111a16]" type="submit">Perbarui</button>
    </form>
@endsection
