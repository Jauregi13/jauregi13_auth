<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
  public function __construct()
  {
      //$this->middleware('auth');
      $this->middleware('example', ['only'=>['index']]);
  }

  public function index()
  {
      return view('ud6');
  }
}
