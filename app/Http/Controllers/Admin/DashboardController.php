<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data ['title'] = 'Admin Dashboard';
        return view('admin.dashboard', $data);
    }
}
