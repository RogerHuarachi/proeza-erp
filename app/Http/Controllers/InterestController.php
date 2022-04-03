<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Interest;
use App\Models\Year;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function index()
    {
        $interests = Interest::get();
        return view('admin.interests.index', compact('interests'));
    }

    public function create()
    {
        $agencies = Agency::get();
        $years = Year::get();
        return view('admin.interests.create', compact('agencies', 'years'));
    }

    public function store(Request $request)
    {
        $valid = Interest::where('month_id','=', $request->month_id)->where('agency_id','=', $request->agency_id)->doesntExist();
        if ($valid) {
            Interest::create($request->all());
            return back()->with('confirmation','Interes Registrado Correctamente');
        } else {
            return back()->with('validation','Interes Ya Registrado Anteriormente');
        }
    }

    public function show(Interest $interest)
    {
        return view('admin.interests.show', compact('interest'));
    }

    public function edit(Interest $interest)
    {
        $agencies = Agency::get();
        $years = Year::get();
        return view('admin.interests.edit', compact('interest', 'agencies', 'years'));
    }

    public function update(Request $request, Interest $interest)
    {
        $interest->update($request->all());

        return back()->with('confirmation','Departamento Actualizado Correctamente');
    }

    public function destroy(Interest $interest)
    {
        $interest->delete();
        return back()->with('mensaje', 'Departamento Eliminado');
    }
}
