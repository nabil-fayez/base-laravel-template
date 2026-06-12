<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم الإدارية</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">

        @include('layouts.partials.sidebar')

        <div class="flex-1 flex flex-col overflow-y-auto overflow-x-hidden">

            @include('layouts.partials.navbar')

            <main class="p-6">

                {{-- ظهور رسائل النجاح الديناميكية من الـ Session --}}
                @if (session('success'))
                    <div class="mb-4 p-4 bg-green-100 border-r-4 border-green-500 text-green-700 rounded-l shadow-sm">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- ظهور رسائل الخطأ العام --}}
                @if (session('error'))
                    <div class="mb-4 p-4 bg-red-100 border-r-4 border-red-500 text-red-700 rounded-l shadow-sm">
                        {{ session('error') }}
                    </div>
                @endif

                {{-- مكان حقن كود كل صفحة فرعية --}}
                @yield('content')
            </main>

        </div>
    </div>

</body>

</html>
