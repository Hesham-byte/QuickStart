<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutHeader;
use App\Models\AboutImage;
use Illuminate\Http\Request;
use App\Models\FeaturedService;

class HomeController extends Controller
{
    public function index()
    {
        $FeaturedServices = FeaturedService::where('active', true)->orderBy('sort', 'asc')->get();
        $AboutHeader = AboutHeader::where('active', true)->orderBy('created_at', 'desc')->limit(1)->first();
        $AboutList = About::where('active', true)->orderBy('sort', 'asc')->get();
        $Clients = AboutImage::where('active', true)->orderBy('sort', 'desc')->get();
        return view("welcome", compact('FeaturedServices', 'AboutHeader', 'AboutList', 'Clients'));
    }
}
