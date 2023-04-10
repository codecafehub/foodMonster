<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $data = [];
        $data['title'] = "Codecafe Resturant";

        return view('pages.home')->with($data);
    }

    public function about(){
        $data = [];
        $data['title'] = "About us";

        return view('pages.about')->with($data);
    }

    public function menu(){
        $data = [];
        $data['title'] = "Our Menu";

        return view('pages.menu')->with($data);
    }

    public function special(){
        $data = [];
        $data['title'] = "Our Special";

        return view('pages.special')->with($data);
    }

    public function event(){
        $data = [];
        $data['title'] = "Our Events";

        return view('pages.event')->with($data);
    }

    public function chef(){
        $data = [];
        $data['title'] = "Our Chefs";

        return view('pages.chef')->with($data);
    } 

    public function gallary(){
        $data = [];
        $data['title'] = "Food Gallary";

        return view('pages.gallary')->with($data);
    }

    public function contact(){
        $data = [];
        $data['title'] = "Contact Us";

        return view('pages.contact')->with($data);
    }
}


