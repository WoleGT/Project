<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:visas,email',
            'phone_number' => 'required|string|max:15',
            'visa_type' => 'required|string|in:Work,Study,Tourism,Business',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Please provide a valid email address',
            'email.unique' => 'Email has already been used to book a consultation',
            'phone_number.required' => 'Phone number is required',
            'phone_number.max' => 'Phone number must not exceed 15 characters',
            'visa_type.required' => 'Visa type is required',
            'visa_type.in' => 'Kindly select a valid visa type',
            'date.required' => 'Date is required',
            'date.date' => 'Please provide a valid date',
            'time.required' => 'Time is required',
            'time.date_format' => 'Time must be in the format HH:MM',
        ];
    }
}
