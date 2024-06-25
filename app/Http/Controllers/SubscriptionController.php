<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function create(): Response
    {
        return Inertia::render('Subscriptions');
    }

    public function index()
    {
        $Subscription = Subscription::paginate();

        return view('Subscription.index', compact('Subscription'))
            ->with('i', (request()->input('page', 1) - 1) * $Subscription->perPage());
    }
}
