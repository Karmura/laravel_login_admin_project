<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Items;

class UserDashboardController extends Controller
{
    public function index()
    {
        $items = Items::all();
        return view('user.userdashboard',compact('items'));
        // return view('user.userdashboard');
    }

    public function view()
    {
        // $items = Items::all();
        // return view('user.userdashboard',compact('items'));
        return view('layouts.user');
    }
}
