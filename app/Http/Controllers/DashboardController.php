<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'pengguna' => User::all()->count(),
            'mahasiswa' => '21',
            'pekerja' => '33',
            'alumni' => '33',
        ]);
    }
}
