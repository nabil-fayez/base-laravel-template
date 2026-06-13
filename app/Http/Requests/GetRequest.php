<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetRequest extends FormRequest
{
    public function __invoke()
    {
        !$this->isMethod('GET') ? redirect()->back() : null;
    }
}
