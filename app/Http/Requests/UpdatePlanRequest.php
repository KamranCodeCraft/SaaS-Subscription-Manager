<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePlanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Example: Ensure the user can update the specific plan,
        // perhaps by checking ownership or permissions.
        // A Policy is a great place for this logic.
        return $this->user()->can('update', $this->plan);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $tenantId = $this->user()->tenant_id; // Assumes user is associated with a tenant

        return [
            'name' => ['sometimes', 'string', 'max:255'],
            'slug' => ['sometimes', 'string', 'max:255', Rule::unique('plans')->where('tenant_id', $tenantId)->ignore($this->plan)],
            'stripe_plan_id' => [
                'nullable', 'string', 'max:255',
                Rule::unique('plans')->where('tenant_id', $tenantId)->ignore($this->plan)
            ],
            'price' => ['sometimes', 'integer', 'min:0'],
            'currency' => ['sometimes', 'string', 'size:3'],
            'interval' => ['sometimes', 'string', 'in:month,year'],
            'description' => ['nullable', 'string'],
            'features' => ['nullable', 'array'],
            'is_active' => ['boolean'],
        ];
    }
}
