<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class MahasiswaController extends Controller
{
    //
    public function index()
    // {
    //     return Auth::user();
    //     $mahasiswa=User::all();
    //     return $mahasiswa;
    //     return view('pages.edit.all-user', ['type_menu' => 'auth', 'data' => $mahasiswa]);
    // }
    {
        // Fetch all users
        $mahasiswa = User::all();

        // Uncomment the following line if you want to return the authenticated user
        // $currentUser = Auth::user();

        // Uncomment the following line if you want to return the list of users
        // return $mahasiswa;

        // Return the view with the list of users
        return view('pages.edit.all-user', ['type_menu' => 'auth', 'data' => $mahasiswa]);
    }
}
