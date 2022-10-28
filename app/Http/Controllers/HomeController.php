<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camp;
use App\Models\Checkout;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        // switch case untuk menentukan redirect dashboard berdasarkan role
        switch (Auth::user()->is_admin) {
            case true:
                return redirect()->route('admin.dashboard');
                break;
            
            default:
                return redirect()->route('user.dashboard');
                break;
        }
    }
}
