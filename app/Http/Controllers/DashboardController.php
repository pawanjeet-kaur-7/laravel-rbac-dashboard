<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    public function index(Request $request): Response
    {
        $user = auth()->user();
        if ($user->hasRole('admin')) {
            return Inertia::render('Dashboard/Admin');
        }
        else {
            return Inertia::render('Dashboard/UserDashboard');
        }
    }
}
