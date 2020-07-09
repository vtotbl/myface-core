<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // toDo пока нет авторизации
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            //
        ];

        switch ($this->getMethod())
        {
            case 'POST':
                return $rules;
            case 'PUT':
                $rules['id'] = 'required|integer|exists:games,id';
                return $rules;
            case 'DELETE':
                return [
                    'id' => 'required|integer|exists:games,id'
                ];
        }
    }
}
