<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eHomeController extends Controller
{
    public function index()
    {

        return view('eHome');
    }

}
