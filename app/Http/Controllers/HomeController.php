<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeaturedService;

class HomeController extends Controller
{
    public function index()
    {
        $FeaturedServices = FeaturedService::where('active', true)->get();
        return view("welcome", compact('FeaturedServices'));
    }
}
