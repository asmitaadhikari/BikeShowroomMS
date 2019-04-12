<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('Admin.admindashboard');
    }
    public function show()
    {
        $user = DB::table('users')-> where('usertypeid',2)->get();
        
        return view('Admin.admindashboard',compact('user'));
    }
}
