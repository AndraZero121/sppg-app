<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateComplaintRequest;
use App\Models\Complaint;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $complaints = Complaint::query()
            ->latest()
            ->paginate(10);

        return view('admin.complaints.index', [
            'complaints' => $complaints,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Complaint $complaint): View
    {
        return view('admin.complaints.edit', [
            'complaint' => $complaint,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComplaintRequest $request, Complaint $complaint): RedirectResponse
    {
        $complaint->update($request->validated());

        return redirect()
            ->route('admin.complaints.index')
            ->with('success', 'Aduan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Complaint $complaint): RedirectResponse
    {
        $complaint->delete();

        return redirect()
            ->route('admin.complaints.index')
            ->with('success', 'Aduan berhasil dihapus.');
    }
}
