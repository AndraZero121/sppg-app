<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Admin MBG' }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-3O1R4kD0GgS0EJ+4jD1MG8G2dMvmnj04KIFWIMk1TRo6bSITs1xvdzwgUQ8z4P5PuXoK0QxE1t6LAPY5d+8T2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#f5f3f0]">
        <div class="flex">
            <!-- Fixed Sidebar -->
            <aside class="fixed left-0 top-0 z-10 h-screen w-64 border-r border-[#eadfd1] bg-[#1f2a25] text-white flex flex-col">
                <div class="px-6 py-8">
                    <p class="font-display text-2xl">MBG Admin</p>
                    <p class="text-sm text-white/70">Panel operasional</p>
                </div>
                
                <nav class="flex-1 overflow-y-auto px-6 space-y-3">
                    <a class="block rounded-xl bg-white/10 px-4 py-3 text-sm font-semibold hover:bg-white/20" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    <a class="block rounded-xl bg-white/10 px-4 py-3 text-sm font-semibold hover:bg-white/20" href="{{ route('admin.schools.index') }}">Sekolah</a>
                    <a class="block rounded-xl bg-white/10 px-4 py-3 text-sm font-semibold hover:bg-white/20" href="{{ route('admin.sppg-teams.index') }}">Tim SPPG</a>
                    <a class="block rounded-xl bg-white/10 px-4 py-3 text-sm font-semibold hover:bg-white/20" href="{{ route('admin.menus.index') }}">Menu Hari Ini</a>
                    <a class="block rounded-xl bg-white/10 px-4 py-3 text-sm font-semibold hover:bg-white/20" href="{{ route('admin.complaints.index') }}">Aduan Publik</a>
                </nav>

                <!-- Tombol Logout Tetap di Bawah -->
                <div class="px-6 py-6">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="w-full rounded-xl bg-[#ef6c37] px-4 py-3 text-sm font-semibold text-white hover:bg-[#d65c2d]" type="submit">Keluar</button>
                    </form>
                </div>
            </aside>

            <!-- Main Content dengan margin-left untuk sidebar -->
            <main class="ml-64 w-full">
                <div class="border-b border-[#eadfd1] bg-white p-6 shadow-sm">
                    <h1 class="font-display text-2xl">{{ $heading ?? 'Dashboard' }}</h1>
                </div>
                <div class="p-6">
                    @include('partials.flash')
                    @yield('content')
                </div>
            </main>
        </div>
    </body>
</html>
