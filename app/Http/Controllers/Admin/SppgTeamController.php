<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSppgTeamRequest;
use App\Http\Requests\UpdateSppgTeamRequest;
use App\Models\SppgTeam;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SppgTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $teams = SppgTeam::query()
            ->orderBy('name')
            ->paginate(10);

        return view('admin.sppg-teams.index', [
            'teams' => $teams,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.sppg-teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSppgTeamRequest $request): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('photo')) {
            $data['photo_path'] = $request->file('photo')->store('sppg-teams', 'public');
        }

        SppgTeam::create($data);

        return redirect()
            ->route('admin.sppg-teams.index')
            ->with('success', 'Tim SPPG berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function edit(SppgTeam $sppgTeam): View
    {
        return view('admin.sppg-teams.edit', [
            'team' => $sppgTeam,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSppgTeamRequest $request, SppgTeam $sppgTeam): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('photo')) {
            $data['photo_path'] = $request->file('photo')->store('sppg-teams', 'public');
        }

        $sppgTeam->update($data);

        return redirect()
            ->route('admin.sppg-teams.index')
            ->with('success', 'Tim SPPG berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SppgTeam $sppgTeam): RedirectResponse
    {
        $sppgTeam->delete();

        return redirect()
            ->route('admin.sppg-teams.index')
            ->with('success', 'Tim SPPG berhasil dihapus.');
    }
}
