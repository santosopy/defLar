<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminReserveController extends Controller
{
    public function index(){
        return view("admin-screen.reserve.index");
    }
}
