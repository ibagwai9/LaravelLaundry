<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{

    public function __construct()
    {
      $this->middleware('guest');
    }


    public function index()
    {
      return view('main.index');
    }
}
