<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|max:255',
            'prenom'=>'required|max:255',
            'phone'=>'required|unique:client',
            'adresse'=>'required|max:255',
            'MDP'=>'required|max:8 min:5',
            'email'=>'required|email|unique:client',
            'date'=>'required|max:255',
            
        ];
    }
}