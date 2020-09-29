<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {
        return view('branch.index');
    }

    public function viewAdd()
    {
        return view('branch.create');
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
        ]);

        return redirect()->back()->with('success', 'Запись успешно добавлена!');
    }
}
