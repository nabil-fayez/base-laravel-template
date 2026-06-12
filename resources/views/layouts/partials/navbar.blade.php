<header class="bg-white shadow-sm border-b border-gray-200 px-6 py-4 flex justify-between items-center">
    <div class="text-sm text-gray-500">
        مرحباً بك في النظام التطبيقي الموحد
    </div>

    <div class="flex items-center space-y-0 space-x-reverse space-x-4">
        <div class="text-left">
            <span class="block text-sm font-bold text-gray-800">{{ auth('admin')->user()->name }}</span>
            <span class="text-xs bg-blue-100 text-blue-800 px-2 py-0.5 rounded-full">
                {{ auth('admin')->user()->isSuperAdmin() ? 'سوبر أدمن' : 'موظف نظام' }}
            </span>
        </div>

        {{-- زر تسجيل الخروج عبر فورم POST لحماية الجلسة --}}
        <form action="{{ route('admin.logout') }}" method="POST" class="inline m-0 p-0">
            @csrf
            <button type="submit"
                class="text-xs bg-red-50 text-red-600 hover:bg-red-100 px-3 py-2 rounded font-medium transition">
                تسجيل الخروج
            </button>
        </form>
    </div>
</header>
