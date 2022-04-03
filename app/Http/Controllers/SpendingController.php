<?php

namespace App\Http\Controllers;

use App\Models\Month;
use App\Models\Spending;
use Illuminate\Http\Request;
use App\Models\Year;
use App\Models\Category;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class SpendingController extends Controller
{
    public function index()
    {
        $spendings = Spending::get();
        return view('admin.spendings.index', compact('spendings'));
    }

    public function create()
    {
        $years = Year::get();
        $roles = Role::get();
        return view('admin.spendings.create', compact('years', 'roles'));
    }

    public function store(Request $request)
    {
        $valid = Spending::where('month_id','=', $request->month_id)->where('item_id','=', $request->item_id)->doesntExist();
        if ($valid) {
            Spending::create($request->all());
            return back()->with('confirmation','Gasto Registrado Correctamente');
        } else {
            return back()->with('validation','Gasto Ya Registrado Anteriormente');
        }
    }

    public function show(Spending $spending)
    {
        return view('admin.spendings.show', compact('spending'));
    }

    public function edit(Spending $spending)
    {
        $years = Year::get();
        $roles = Role::get();
        return view('admin.spendings.edit', compact('spending', 'years', 'roles'));
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

    public function months(Year $year)
    {
        return $year->months;
    }

    public function categories($id)
    {
        $role = Role::find($id);
        $categories = Category::where('role_id', '=', $role->id)->get();
        return $categories;
    }
    public function items(Category $category)
    {
        return $category->items;
    }

    public function items2(Category $category, Month $month)
    {
        $items = $category->items;
        $spendings = DB::table('items');

        $user = Auth::user();
        $role = $user->roles->first();
        $spendings = $month->spendings->where('role_id', '=', $role->id)->where('role_id', '=', $role->id);

        $itemsdel = collect();
        foreach ($spendings as $spending) {
            if ($spending->item->category->id == $category->id) {
                $itemsdel->push($spending->item);
            }
        }
        $res = $items
            ->diff($itemsdel);
        return $res;
    }
}
