@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-6 py-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-700 mb-6">إضافة منشأة جديدة للنظام (مسار موحد)</h2>

            {{-- التوجيه للمسار الموحد الجديد --}}
            <form action="{{ route('admin.tenants.store') }}" method="POST">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    {{-- حقل اسم المنشأة --}}
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">اسم المنشأة <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="w-full border rounded px-3 py-2 @error('name') border-red-500 @enderror">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- حقل البريد الإلكتروني --}}
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">البريد الإلكتروني للمنشأة <span
                                class="text-red-500">*</span></label>
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="w-full border rounded px-3 py-2 @error('email') border-red-500 @enderror">
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- حقل رقم الهاتف --}}
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">رقم الهاتف</label>
                        <input type="text" name="phone" value="{{ old('phone') }}"
                            class="w-full border rounded px-3 py-2">
                    </div>

                    {{-- حقل المعرف --}}
                    <div>
                        <label class="block text-gray-700 font-bold mb-2">المعرف</label>
                        <input type="text" name="slug" value="{{ old('slug') }}"
                            class="w-full border rounded px-3 py-2 @error('slug') border-red-500 @enderror"
                            placeholder="company-name أو company_name">
                        @error('slug')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mt-6 flex justify-end space-x-2 space-x-reverse">
                    <a href="{{ route('admin.tenants.index') }}"
                        class="bg-gray-200 text-gray-700 font-bold py-2 px-6 rounded hover:bg-gray-300">
                        إلغاء
                    </a>
                    <button type="submit" class="bg-blue-600 text-white font-bold py-2 px-6 rounded hover:bg-blue-700">
                        حفظ المنشأة وتفعيلها
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
