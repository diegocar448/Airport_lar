<?php

namespace App\Http\Controllers\Site;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        $title = 'Home Page';

        //$cities = City::pluck('name')->sortBy('name');
        $cities = City::orderBy('name', 'ASC')->get();

        return view('site.home.index', compact('title', 'cities'));
    }

    public function promotions()
    {
        $title = 'Promoções';

        return view('site.promotions.list', compact('title'));
    }
}
