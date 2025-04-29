<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function works()
    {
        return view('pages.works');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function service()
    {
        return view('pages.service');
    }
}
