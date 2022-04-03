<?php

namespace App\Http\Controllers;

use App\Models\Change;
use Illuminate\Http\Request;

class ChangeController extends Controller
{
    public function index()
    {
        $changes = Change::get();
        return view('admin.changes.index', compact('changes'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Change $change)
    {
        return view('admin.changes.show', compact('change'));
    }

    public function edit(Change $change)
    {
        //
    }

    public function update(Request $request, Change $change)
    {
        //
    }

    public function destroy(Change $change)
    {
        $change->delete();
        return back()->with('mensaje', 'Historico Eliminado');
    }
}
