<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Show the application index page
     *
     * @return Renderable
     */
    public function index()
    {
        return view('index');
    }
}
