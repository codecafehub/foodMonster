<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $data = [];
        $data['title'] ="Starter|Menu";

        return view('modals.ourmenu-modal')->with($data);
    }

    public function starterMenu()
    {
        $data = [];
        $data['title'] ="Starter|Menu";

        return view('modals.starter-ourmenu-modal')->with($data);
    }
}
