<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class OrderController extends Controller
{
    public function orders(Request $request): Response {
		return Inertia::render('Orders/List');
	}
}
