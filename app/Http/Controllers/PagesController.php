<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() 
    {
      return view('welcome')->withTasks([
        'goto the monkey hall',
        'eat a banana',
        'buy some dogecoin',
        'be a good jackal'
      ]);
    }

    public function contact() {
      return view('contact');
    }

    public function about() {
      return view('about');
    }
}
