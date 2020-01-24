<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  // Render Home page
  // 
  // public function index()
  // {
  //   return view('home/index');
  // }

  // Render About Me page

  public function about()
  {
    return view('pages/about-me');
  }

  // Render Blog page

  public function blog()
  {
    return view('pages/blog-posts');
  }

  // Render Contact page

  function contact()
  {
    return view('pages/contact');
  }

}
