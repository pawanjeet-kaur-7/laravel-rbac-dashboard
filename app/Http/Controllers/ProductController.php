<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ProductController extends Controller {
	public function list(Request $request): Response {
		return Inertia::render('Products/List');
	}

	public function all(Request $request): Response {
		return Inertia::render('Products/All');
	}
}
