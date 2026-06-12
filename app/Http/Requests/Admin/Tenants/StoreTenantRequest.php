<?php

namespace App\Http\Requests\Admin\Tenants;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreTenantRequest extends FormRequest
{
    public function authorize(): bool
    {
        // الفحص يعتمد على الـ Gate الموحد الآن
        return Auth::guard('admin')->check() && Auth::guard('admin')->user()->can('tenants.create');
    }

    public function rules(): array
    {
        return [
            'name'   => 'required|string|min:3|max:150',
            'slug'   => 'required|string|max:100|unique:tenants,slug',
            'email'  => 'required|email|max:100|unique:tenants,email',
            'phone'  => 'nullable|string|max:20',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'  => 'اسم المنشأة مطلوب.',
            'name.min'       => 'يجب ألا يقل اسم المنشأة عن 3 حروف.',
            'name.max'       => 'يجب ألا يزيد اسم المنشأة عن 150 حرفًا.',
            'slug.required'  => 'العنوان (slug) للمنشأة مطلوب.',
            'slug.unique'    => 'هذا العنوان (slug) مسجل لمنشأة أخرى بالفعل.',
            'email.required' => 'البريد الإلكتروني للمنشأة حقل إجباري.',
            'email.email'    => 'يجب أن يكون البريد الإلكتروني عنوانًا صحيحًا.',
            'email.max'      => 'يجب ألا يزيد البريد الإلكتروني عن 100 حرف.',
            'email.unique'   => 'هذا البريد الإلكتروني مسجل لمنشأة أخرى بالفعل.',
            'phone.string'   => 'رقم الهاتف يجب أن يكون نصًا.',
            'phone.max'      => 'يجب ألا يزيد رقم الهاتف عن 20 حرفًا.',
            'phone.nullable' => 'رقم الهاتف غير مطلوب، يمكنك تركه فارغًا.',

        ];
    }
}