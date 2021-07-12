<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {

        if(Auth::user()->hasRole('customer')) {
            return view('homePage');
        }elseif(Auth::user()->hasRole('employee')) {
            return view('employeedashboard');
        }elseif(Auth::user()->hasRole('admin')) {
            return view('dashboard');
        }
    }
}
