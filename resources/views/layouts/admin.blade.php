<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Admin MBG' }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-3O1R4kD0GgS0EJ+4jD1MG8G2dMvmnj04KIFWIMk1TRo6bSITs1xvdzwgUQ8z4P5PuXoK0QxE1t6LAPY5d+8T2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-[#f8f4ec] text-[#1f2937]">
        <div class="flex min-h-screen">
            <aside class="hidden w-64 flex-col gap-6 bg-[#1f2a25] px-6 py-8 text-white lg:flex">
                <div>
                    <p class="font-display text-2xl">MBG Admin</p>
                    <p class="text-sm text-white/70">Panel operasional</p>
                </div>
                <nav class="flex flex-1 flex-col gap-3 text-sm font-semibold">
                    <a class="rounded-xl bg-white/10 px-4 py-3 hover:bg-white/20" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    <a class="rounded-xl bg-white/10 px-4 py-3 hover:bg-white/20" href="{{ route('admin.schools.index') }}">Sekolah</a>
                    <a class="rounded-xl bg-white/10 px-4 py-3 hover:bg-white/20" href="{{ route('admin.sppg-teams.index') }}">Tim SPPG</a>
                    <a class="rounded-xl bg-white/10 px-4 py-3 hover:bg-white/20" href="{{ route('admin.menus.index') }}">Menu Hari Ini</a>
                    <a class="rounded-xl bg-white/10 px-4 py-3 hover:bg-white/20" href="{{ route('admin.complaints.index') }}">Aduan Publik</a>
                </nav>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="w-full rounded-xl bg-[#ef6c37] px-4 py-3 text-sm font-semibold text-white hover:bg-[#d65c2d]" type="submit">Keluar</button>
                </form>
            </aside>

            <div class="flex flex-1 flex-col">
                <header class="flex items-center justify-between border-b border-[#eadfd1] bg-white px-6 py-5">
                    <div>
                        <p class="text-sm text-[#6b7280]">Selamat datang kembali</p>
                        <p class="font-display text-xl">{{ $heading ?? 'Dashboard' }}</p>
                    </div>
                    <a class="rounded-full border border-[#1f2937] px-4 py-2 text-sm font-semibold hover:bg-[#1f2937] hover:text-white" href="{{ route('home') }}">Lihat Situs</a>
                </header>

                <main class="flex-1 px-6 py-8">
                    @include('partials.flash')
                    @yield('content')
                </main>
            </div>
        </div>
    </body>
</html>
