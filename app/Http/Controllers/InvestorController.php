<?php

namespace App\Http\Controllers;

use App\Models\Change;
use App\Models\Investor;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function index()
    {
        // $investors = Investor::where('state', 'Vigente')->get();
        $investors = Investor::get();
        return view('admin.investors.index', compact('investors'));
    }

    public function create()
    {
        return view('admin.investors.create');
    }

    public function store(Request $request)
    {
        Investor::create($request->all());
        return back()->with('confirmation','Inversionista Registrado Correctamente');
    }

    public function show(Investor $investor)
    {
        return view('admin.investors.show', compact('investor'));
    }

    public function edit(Investor $investor)
    {
        return view('admin.investors.edit', compact('investor'));
    }

    public function update(Request $request, Investor $investor)
    {
        $change = new Change();
        $change->name = $investor->name;
        $change->state = $investor->state;
        $change->deposit = $investor->deposit;
        $change->amount = $investor->amount;
        $change->money = $investor->money;
        $change->ti = $investor->ti;
        $change->interest = $investor->interest;
        $change->pay = $investor->pay;
        $change->expiration = $investor->expiration;
        $change->comentary = $investor->comentary;
        $change->save();
        $investor->update($request->all());
        return back()->with('confirmation','Inversionista Actualizado Correctamente');
    }

    public function destroy(Investor $investor)
    {
        $investor->delete();
        return back()->with('mensaje', 'Inversionista Eliminado');
    }
}
