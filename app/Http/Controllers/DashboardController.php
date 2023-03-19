<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $alumni = User::where('role_id','2'
        )->get();
        return view('admin.dashboard',compact('alumni'));
    }
}
