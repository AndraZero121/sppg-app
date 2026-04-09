<?php

namespace App\Http\Controllers\Admin;

use App\Models\SppgTeam;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function index(): View
    {
        $sppgTeams = SppgTeam::latest()->limit(6)->get();

        return view('admin.dashboard', ['sppgTeams' => $sppgTeams]);
    }
}
