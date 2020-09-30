<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;

class BranchController extends Controller
{
    public function index()
    {
        return view('branch.index', [
            'branches' => Branch::all()
        ]);
    }

    public function viewAdd()
    {
        return view('branch.add');
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4|max:256',
            'description' => 'required|min:4|max:1024',
        ]);

        $branch = new Branch();
        $branch->name = $request->name;
        $branch->description = $request->description;
        $branch->save();

        return redirect('/branches')->with('success', 'Запись успешно добавлена!');
    }

    public function viewDetailed($id)
    {
        $branchArr = Branch::where('id', $id)->get();

        if (count($branchArr) != 1)
        {
            return redirect('/branches')->withErrors('Не существует филиала по данному индексу');
        }

        return view('branch.detailed', [
            'branch' => $branchArr[0],
        ]);
    }
}
