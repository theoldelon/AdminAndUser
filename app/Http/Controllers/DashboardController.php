<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
        //this show dashboard

        public function index()
        {
            return view('dashboard');
        }
}
