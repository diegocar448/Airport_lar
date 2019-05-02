<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PanelController extends Controller
{
    public function index()
    {
        $title = "Sistema de Agência de Turismo";

        return view('panel.home.index', compact("title"));
    }
}
