<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        switch (Auth::user()->role) {
            case 'instrutor':
                return redirect()->route('instructor.dashboard');
                break;

            case 'member':
                return redirect()->route('member.dashboard');
                break;

            case 'admin':
                return redirect()->route('admin.dashboard');
                break;

            default:
            return redirect()->route('member.dashboard');
            break;
        }
    }
}
