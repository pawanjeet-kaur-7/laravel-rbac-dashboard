<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class CartController extends Controller
{
    public function cart(Request $request): Response {
		return Inertia::render('Cart/List');
	}
}
