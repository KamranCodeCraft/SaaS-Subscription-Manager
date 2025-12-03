<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return JsonResource::collection(Subscription::with(['plan'])->where('user_id', request()->user()->id)->latest()->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'plan_id' => 'required|exists:plans,id',
        ]);

        // Use authenticated user
        $userId = $request->user()->id; 

        // Check if already subscribed to this plan (optional logic)
        // For simplicity, we just create a new one

        $plan = Plan::findOrFail($request->plan_id);

        $subscription = Subscription::create([
            'user_id' => $userId,
            'plan_id' => $plan->id,
            'starts_at' => now(),
            'ends_at' => $plan->interval === 'year' ? now()->addYear() : now()->addMonth(),
            'status' => 'active',
        ]);

        return new JsonResource($subscription->load('plan'));
    }
}
