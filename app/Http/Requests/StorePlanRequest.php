<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StorePlanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // For demo purposes, allow everyone
        return true;
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'tenant_id' => $this->user()?->tenant_id ?? 1,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $tenantId = $this->input('tenant_id');

        return [
            'tenant_id' => ['required', 'integer'],
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', Rule::unique('plans', 'slug')->where('tenant_id', $tenantId)],
            'stripe_plan_id' => [
                'nullable', 'string', 'max:255',
                Rule::unique('plans', 'stripe_plan_id')->where('tenant_id', $tenantId)
            ],
            'price' => ['required', 'integer', 'min:0'],
            'currency' => ['required', 'string', 'size:3'],
            'interval' => ['required', 'string', 'in:month,year'],
            'description' => ['nullable', 'string'],
            'features' => ['nullable', 'array'],
            'is_active' => ['boolean'],
        ];
    }
}
