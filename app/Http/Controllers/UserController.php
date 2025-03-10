<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class UserController extends Controller
{
    public function list(Request $request): Response
    {
        return Inertia::render('Users/List');
    }
}
