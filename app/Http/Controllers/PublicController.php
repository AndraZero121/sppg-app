<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComplaintRequest;
use App\Models\Complaint;
use App\Models\Menu;
use App\Models\SppgTeam;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PublicController extends Controller
{
    public function home(): View
    {
        $todayMenu = Menu::query()
            ->whereDate('served_on', now())
            ->where('is_published', true)
            ->latest('served_on')
            ->first();

        $latestMenus = Menu::query()
            ->where('is_published', true)
            ->latest('served_on')
            ->limit(3)
            ->get();

        return view('home', [
            'todayMenu' => $todayMenu,
            'latestMenus' => $latestMenus,
        ]);
    }

    public function menuHistory(): View
    {
        $menus = Menu::query()
            ->where('is_published', true)
            ->latest('served_on')
            ->get();

        return view('menus.history', [
            'menus' => $menus,
        ]);
    }

    public function menuShow(Menu $menu): View
    {
        if (! $menu->is_published) {
            abort(404);
        }

        return view('menus.show', [
            'menu' => $menu,
        ]);
    }

    public function teams(): View
    {
        $teams = SppgTeam::query()
            ->orderBy('name')
            ->get();

        return view('teams.index', [
            'teams' => $teams,
        ]);
    }

    public function teamShow(SppgTeam $sppgTeam): View
    {
        return view('teams.show', [
            'team' => $sppgTeam,
        ]);
    }

    public function complaintForm(): View
    {
        return view('complaints.create');
    }

    public function complaintStore(StoreComplaintRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $nextNumber = (int) Complaint::query()->max('id') + 1;
        $ticket = 'MBG-'.now()->format('Y').'-'.str_pad((string) $nextNumber, 4, '0', STR_PAD_LEFT);

        $data['ticket'] = $ticket;
        $data['status'] = 'Pending';

        Complaint::create($data);

        return redirect()
            ->route('complaints.create')
            ->with('ticket', $ticket);
    }

    public function complaintsIndex(): View
    {
        $complaints = Complaint::query()
            ->latest()
            ->get();

        return view('complaints.index', [
            'complaints' => $complaints,
        ]);
    }

    public function contact(): View
    {
        return view('contact');
    }
}
