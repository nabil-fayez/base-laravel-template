<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PutRequest extends FormRequest
{
    public function __invoke()
    {
        !$this->isMethod('PUT') ?? redirect()->back();
    }
}
