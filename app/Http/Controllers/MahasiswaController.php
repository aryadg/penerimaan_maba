<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class MahasiswaController extends Controller
{
    //
    public function index()
    {
        return Auth::user();
        $mahasiswa=User::all();
        // return $mahasiswa;
        return view('pages.edit.all-user', ['type_menu' => 'auth', 'data' => $mahasiswa]);
    }
}
