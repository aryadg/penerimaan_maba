<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function index()
    {
        $var_nama = "AryaGaharu";
        return view('bdalluser', compact('var_nama'));
    }

    public function bdAllUser()
    {
        return view('bdalluser');
    }

    public function bdAddUser()
    {
        return view('bdadduser');
    }
}
