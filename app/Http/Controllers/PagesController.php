<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  // Render Home page
  public function index()
  {
    return View::make('home/index');
  }

  // Render About Me page
  public fuction about()
  {
    return View:make('pages/about-me');
  }

  // Render Contact page
  public fucntion contact()
  {
    return View:make('pages/contact');
  }
}
