@extends('layouts.admin')

@section('content')
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-xl font-bold text-gray-800">إدارة المنشآت والشركات (Tenants)</h1>
                <p class="text-sm text-gray-500 mt-1">عرض وتعديل والتحكم في كافة الشركات المشتركة بالنظام المركزي</p>
            </div>
            <a href="{{ route('admin.tenants.create') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700 text-sm font-medium transition">
                ➕ إضافة منشأة جديدة
            </a>
        </div>

        <div class="overflow-x-auto border border-gray-200 rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 text-right text-sm">
                <thead class="bg-gray-50 text-gray-700 uppercase font-semibold">
                    <tr>
                        <th class="px-6 py-3">اسم المنشأة</th>
                        <th class="px-6 py-3">الرابط (Slug)</th>
                        <th class="px-6 py-3">البريد الإلكتروني</th>
                        <th class="px-6 py-3">الحالة</th>
                        <th class="px-6 py-3 text-left">العمليات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-gray-600">
                    @forelse($tenants as $tenant)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium text-gray-900">{{ $tenant->name }}</td>
                            <td class="px-6 py-4 text-gray-500">{{ $tenant->slug }}</td>
                            <td class="px-6 py-4">{{ $tenant->email }}</td>
                            <td class="px-6 py-4">
                                <span
                                    class="px-2 py-1 rounded-full text-xs font-medium {{ $tenant->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $tenant->status === 'active' ? 'نشط' : 'محظور' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-left space-x-2 space-x-reverse">
                                <a href="#" class="text-blue-600 hover:underline">تعديل</a>
                                <a href="#" class="text-red-600 hover:underline">تعطيل</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-gray-400">لا توجد منشآت مسجلة في النظام حتى
                                الآن.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $tenants->links() }}
        </div>
    </div>
@endsection
