<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Show the form to create a new blog Profile.
     */
    public function profile(): View
    {
        return view('home');
    }
}
