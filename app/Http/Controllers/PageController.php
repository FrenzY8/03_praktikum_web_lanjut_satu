<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function news()
    {
        return view('news');
    }

    public function about()
    {
        return view('about');
    }

    public function karir()
    {
        return view('karir');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about1()
    {
        return "Rifky Fadillah - NIS: ";
    }

    public function articles($id)
    {
        return "Halaman Artikel dengan ID " . $id;
    }
}