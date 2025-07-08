<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"=> ["required|string|max:255"],
            "email"=> ["required|email|unique:visas,email"],
            "phone_number"=> ["required|string|max:15"],
            "visa_type"=> ["required"],
            "date"=> ["required|date"],
            "time"=> ["required|date_format:H:i"],
        ];
    }

    public function messages(): array
{
    return [
        'name.required' => 'Name is required',
        'email.required' => 'Email is required',
        'email.unique' => 'Email has already been used to book a consultation',
        'phone_number.required' => 'Phone number is required',
        'visa_type.required' => 'Visa type is required',
        'date.required' => 'Date is required',
        'time.required' => 'Time is required',
        'time.date_format' => 'Time must be in the format HH:MM',
        'email.email' => 'Please provide a valid email address',
        'phone_number.max' => 'Phone number must not exceed 15 characters',
    ];
}
}
