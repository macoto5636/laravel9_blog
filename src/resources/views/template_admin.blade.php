<!DOCTYPE html>
<html>
<head>
    @yield('components/header')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/markdown_view.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modal.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8e1936080d.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">
    <header class="sticky top-0 z-50">
        <nav class="flex items-center justify-between flex-wrap bg-gray-800 p-3 border-b border-solid border-gray-800">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
              <span class="font-semibold text-xl tracking-tight">Nokita's  Blog</span>
            </div>
        </nav>
    </header>
    @yield('content')
    <script src="{{ mix('js/app.js') }}"></script>
    <footer>
        <div class="h-52 bg-indigo">
            <div class="container mx-auto p-10">
                <p class="text-white font-semibold text-2xl tracking-tight">Nokita's  Blog</p>
                <p class="text-gray-400 text-lg tracking-tight mt-2">管理側</p>
            </div>
        </div>
    </footer>
</body>
</html>