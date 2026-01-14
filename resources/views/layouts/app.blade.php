<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'MBG - Makan Bergizi Gratis' }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-3O1R4kD0GgS0EJ+4jD1MG8G2dMvmnj04KIFWIMk1TRo6bSITs1xvdzwgUQ8z4P5PuXoK0QxE1t6LAPY5d+8T2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-[#f6efe7] text-[#1f2937]">
        <div class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">
            <div class="absolute -top-24 left-[-10%] h-[28rem] w-[28rem] rounded-full bg-[#ffd7a1] opacity-50 blur-3xl"></div>
            <div class="absolute bottom-[-12rem] right-[-8%] h-[30rem] w-[30rem] rounded-full bg-[#b9e9d4] opacity-60 blur-3xl"></div>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(255,255,255,0.7),_rgba(246,239,231,0.9)_55%,_rgba(246,239,231,1)_100%)]"></div>
        </div>

        <header class="mx-auto flex max-w-6xl items-center justify-between px-6 py-6">
            <div class="flex items-center gap-3">
                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#2a4b3f] text-white shadow-lg">
                    <span class="font-display text-lg">MBG</span>
                </div>
                <div>
                    <p class="font-display text-xl">Makan Bergizi Gratis</p>
                    <p class="text-sm text-[#475569]">Portal layanan gizi & distribusi</p>
                </div>
            </div>
            <nav class="hidden items-center gap-6 text-sm font-semibold text-[#1f2937] md:flex">
                <a class="hover:text-[#ef6c37]" href="{{ route('home') }}">Beranda</a>
                <a class="hover:text-[#ef6c37]" href="{{ route('menus.history') }}">Menu</a>
                <a class="hover:text-[#ef6c37]" href="{{ route('teams.index') }}">Tim SPPG</a>
                <a class="hover:text-[#ef6c37]" href="{{ route('complaints.create') }}">Pengaduan</a>
                <a class="hover:text-[#ef6c37]" href="{{ route('contact') }}">Kontak</a>
            </nav>
            <div class="flex items-center gap-3">
                @auth
                    <a class="rounded-full border border-[#1f2937] px-4 py-2 text-sm font-semibold hover:bg-[#1f2937] hover:text-white" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="rounded-full bg-[#ef6c37] px-4 py-2 text-sm font-semibold text-white hover:bg-[#d65c2d]" type="submit">Logout</button>
                    </form>
                @else
                    <a class="rounded-full border border-[#1f2937] px-4 py-2 text-sm font-semibold hover:bg-[#1f2937] hover:text-white" href="{{ route('login') }}">Masuk</a>
                    <a class="rounded-full bg-[#ef6c37] px-4 py-2 text-sm font-semibold text-white hover:bg-[#d65c2d]" href="{{ route('register') }}">Daftar</a>
                @endauth
            </div>
        </header>

        <div class="mx-auto flex max-w-6xl flex-wrap items-center gap-3 px-6 pb-6 text-sm font-semibold md:hidden">
            <a class="rounded-full border border-[#eadfd1] px-4 py-2" href="{{ route('home') }}">Beranda</a>
            <a class="rounded-full border border-[#eadfd1] px-4 py-2" href="{{ route('menus.history') }}">Menu</a>
            <a class="rounded-full border border-[#eadfd1] px-4 py-2" href="{{ route('teams.index') }}">Tim SPPG</a>
            <a class="rounded-full border border-[#eadfd1] px-4 py-2" href="{{ route('complaints.create') }}">Pengaduan</a>
            <a class="rounded-full border border-[#eadfd1] px-4 py-2" href="{{ route('contact') }}">Kontak</a>
        </div>

        <main class="mx-auto max-w-6xl px-6 pb-20">
            @include('partials.flash')
            @yield('content')
        </main>

        <footer class="border-t border-[#eadfd1] bg-white/60">
            <div class="mx-auto flex max-w-6xl flex-col items-start justify-between gap-6 px-6 py-8 md:flex-row md:items-center">
                <div>
                    <p class="font-display text-lg">MBG</p>
                    <p class="text-sm text-[#6b7280]">Gerakan kolaboratif untuk gizi seimbang.</p>
                </div>
                <div class="text-sm text-[#6b7280]">
                    <p>© {{ now()->year }} MBG. Semua hak dilindungi.</p>
                </div>
            </div>
        </footer>
    </body>
</html>
