<?php

namespace ConfrariaWeb\Domain\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDomainDns extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'domain_id' => 'required',
            'type' => 'required',
            'name' => 'required',
            'content' => 'required',
            'ttl' => 'required',
        ];
    }
}
