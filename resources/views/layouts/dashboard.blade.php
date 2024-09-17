<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Site @yield('title') </title>
    <script src="//cdn.tailwindcss.com?plugins=forms,typography"></script>
    @stack('styles')
</head>

<body>
    <header class="topbar bg-black">
        @include('partials.nav')
    </header>
    <section class="flex h-[600px]">
        <aside class="w-1/5 bg-gray-200 p-5">
            @section('sidebar')
            Sidebar
            @show
        </aside>
        <main class="w-4/5 p-5">
            @yield('content', 'Main Content')
        </main>
    </section>
    <footer class="bg-gray-600 text-white h-[110px] p-5 flex justify-between">
        <div>
            @section('footer')
            Footer
            @show
        </div>
        <div>
            @include('partials.address')
        </div>

    </footer>
</body>
    @stack('scripts')
</html>