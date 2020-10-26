<?php

use Illuminate\Support\Facades\Route;


if(! function_exists('page_title'))
{
    function page_title($title)
    {
        return $title.' | '.config('app.name').' - List of artisans';
    }
}

if(! function_exists('set_active_route'))
{
    function set_active_route($route)
    {
        return Route::is($route) ? 'active' : '';
    }
}