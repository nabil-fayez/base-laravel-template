<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeleteRequest extends FormRequest
{
    public function __invoke()
    {
        !$this->isMethod('DELETE') ? redirect()->back() : null;
    }
}
