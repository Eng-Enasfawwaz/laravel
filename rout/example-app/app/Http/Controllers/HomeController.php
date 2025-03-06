<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class HomeController extends Controller
{
    public function redirectToWelcome(): RedirectResponse
    {
        return redirect('/welcome');
    }
}