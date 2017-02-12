<?php

namespace Hadefication\Kuding\Support\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function dashboard()
    {
        return view('kuding::pages.cpanel.dashboard');
    }
}
