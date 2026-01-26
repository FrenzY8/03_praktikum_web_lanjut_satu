<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }

    public function team()
    {
        return view('team');
    }

    public function price()
    {
        return view('price');
    }

    public function blog()
    {
        return view('blog');
    }

    public function detail()
    {
        return view('detail');
    }

    public function contact()
    {
        return view('contact');
    }

    public function appointment()
    {
        return view('appointment');
    }

    public function search()
    {
        return view('search');
    }
}
