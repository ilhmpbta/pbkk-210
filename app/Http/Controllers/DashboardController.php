<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('dashboard', [
            'totalUsers' => User::count(),
            'totalAdmins' => User::role('Admin')->count(),
            'totalStaf' => User::role('Staf')->count(),
        ]);
    }
}
