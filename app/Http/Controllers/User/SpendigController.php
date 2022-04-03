<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Month;
use Illuminate\Http\Request;
use App\Models\Year;
use Illuminate\Support\Facades\Auth;
use App\Models\Spending;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class SpendigController extends Controller
{
    public function index()
    {
        //
    }

    public function create(Month $month)
    {
        $user = Auth::user();
        $role = $user->roles->first();
        $categories = Category::where('role_id', '=', $role->id)->get();
        return view('users.spendings.create', compact('month', 'categories'));
    }

    public function store(Request $request)
    {
        $valid = Spending::where('month_id','=', $request->month_id)->where('item_id','=', $request->item_id)->doesntExist();

        if ($valid) {
            $user = Auth::user();
            $role = $user->roles->first();

            $request["role_id"]=$role->id;
            Spending::create($request->all());
            return back()->with('confirmation','Gasto Registrado Correctamente');
        } else {
            return back()->with('validation','Gasto Ya Registrado Anteriormente');
        }
    }

    public function show(Spending $spending)
    {
        return view('users.spendings.show', compact('spending'));
    }

    public function edit(Spending $spending)
    {
        $user = Auth::user();
        $role = $user->roles->first();
        $categories = Category::where('role_id', '=', $role->id)->get();
        return view('users.spendings.edit', compact('spending', 'categories'));
    }

    public function update(Request $request, Spending $spending)
    {
        $spending->update($request->all());

        return back()->with('confirmation','Gasto Actualizado Correctamente');
    }

    public function destroy(Spending $spending)
    {
        $spending->delete();
        return back()->with('mensaje', 'Gasto Eliminado');
    }




    public function sum(Request $request, Spending $spending)
    {
        $moneynew = $spending->money + $request->money;
        $spending->money = $moneynew;

        $spending->save();
        return back()->with('confirmation','Gasto Actualizado Correctamente');
        // return $moneynew;
    }



    public function year()
    {
        $years = Year::get();
        return view('users.spendings.filter.year', compact('years'));
    }

    public function month(Year $year)
    {
        $months = $year->months;
        return view('users.spendings.filter.month', compact('months'));
    }

    public function spending(Month $month)
    {
        $user = Auth::user();
        $role = $user->roles->first();
        $spendings = $month->spendings->where('role_id', '=', $role->id);
        $total = $spendings->sum('money');
        return view('users.spendings.filter.spending', compact('spendings', 'month', 'total'));
    }
}
