<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function home()
    {
        return View::make('pages.home');
    }

    public function about()
    {
        return View::make('pages.about');
    }
}
