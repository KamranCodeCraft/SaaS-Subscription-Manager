<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\Tenant;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure we have a tenant
        $tenant = Tenant::firstOrCreate(
            ['id' => 1],
            ['name' => 'Demo Tenant', 'domain' => 'demo.localhost', 'database' => 'saas_db']
        );

        $plans = [
            [
                'name' => 'Free Plan',
                'slug' => 'free-plan',
                'price' => 0,
                'currency' => 'PKR',
                'interval' => 'month',
                'description' => 'Best for: New users testing the platform',
                'features' => [
                    '1 Project',
                    '100 MB Storage',
                    'Basic Analytics',
                    'Email Support (48 hrs)',
                    'Limited API Calls (100/month)',
                ],
            ],
            [
                'name' => 'Starter Plan',
                'slug' => 'starter-plan',
                'price' => 199900, // 1999 PKR in cents/paisa
                'currency' => 'PKR',
                'interval' => 'month',
                'description' => 'Best for: Freelancers & small teams',
                'features' => [
                    '5 Projects',
                    '5 GB Storage',
                    'Standard Analytics',
                    'Priority Email Support',
                    '5,000 API Calls',
                    'Export (PDF/CSV)',
                ],
            ],
            [
                'name' => 'Pro Plan',
                'slug' => 'pro-plan',
                'price' => 499900, // 4999 PKR in cents/paisa
                'currency' => 'PKR',
                'interval' => 'month',
                'description' => 'Best for: Businesses scaling up (Most Popular)',
                'features' => [
                    'Unlimited Projects',
                    '20 GB Storage',
                    'Advanced Analytics & Reports',
                    'Email + Chat Support',
                    '50,000 API Calls',
                    'Team Collaboration (5 Members)',
                    'Integrations (Stripe, PayPal)',
                ],
            ],
            [
                'name' => 'Enterprise Plan',
                'slug' => 'enterprise-plan',
                'price' => 0, // Custom pricing
                'currency' => 'PKR',
                'interval' => 'month',
                'description' => 'Best for: Large companies with custom needs. Contact us for pricing.',
                'features' => [
                    'Unlimited Everything',
                    '200 GB Storage',
                    'Dedicated Account Manager',
                    'SLA 99.9%',
                    'Custom Integrations',
                    'Role-Based Access Control',
                    'Onboarding + Training',
                    '24/7 Priority Support',
                ],
            ],
        ];

        foreach ($plans as $planData) {
            Plan::updateOrCreate(
                ['slug' => $planData['slug'], 'tenant_id' => $tenant->id],
                $planData
            );
        }
    }
}
