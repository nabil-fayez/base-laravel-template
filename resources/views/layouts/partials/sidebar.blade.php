<div class="w-64 bg-gray-900 text-gray-100 flex flex-col h-full">
    <div class="p-5 text-xl font-bold bg-gray-950 text-center border-b border-gray-800">
        بوابة الإدارة المركزية
    </div>

    <nav class="flex-1 p-4 space-y-2">

        <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2.5 rounded hover:bg-gray-800 transition">
            📊 لوحة التحكم العامة
        </a>

        <hr class="border-gray-800 my-4">
        {{-- 🛡️ أقسام تخضع لصلاحيات موظفي النظام العاديين --}}
        <div class="text-xs font-semibold text-gray-500 uppercase px-4 pt-4 mb-2">العمليات اليومية</div>

        @can('tenants.view')
            <a href="#" class="block px-4 py-2.5 rounded hover:bg-gray-800 transition">
                👁️ استعراض تقارير الشركات
            </a>
        @endcan

        @can('admins.view')
            <a href="#" class="block px-4 py-2.5 rounded hover:bg-gray-800 transition">
                👥 شؤون موظفي النظام
            </a>
        @endcan

    </nav>
</div>
