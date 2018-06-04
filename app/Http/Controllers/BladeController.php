<?php

namespace App\Http\Controllers;

use View;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function index()
    {
        return View('index');
    }

    public function about()
    {
        return View('about');
    }

    public function work()
    {
        return View('work');
    }

    public function portfolio_detail()
    {
        return View('portfolio_detail');
    }
    
    public function contact()
    {
        return View('contact');
    }
}
