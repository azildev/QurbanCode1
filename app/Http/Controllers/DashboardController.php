<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        return 'HAIIA'.Session::get('user').'<a href="{{ route("logout") }}">Logout</a>';
    }

}
