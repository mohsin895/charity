<?php

namespace Modules\Authentication\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function index()
    {
        $method = Auth::User()->user_type.'_dashboard';
        Alert::toast('Dashboard Is Working.', 'success');

        return view('backend.dashboard.Admin');
    }
}
