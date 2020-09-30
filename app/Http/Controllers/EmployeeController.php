<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function viewAdd($branchId)
    {
        return view('employee.add', [
            'branchId' => $branchId,
        ]);
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4|max:256',
            'surname' => 'required|min:4|max:256',
        ]);

        $employee = new Employee();
        $employee->name = $request->name;
        $employee->surname = $request->surname;
        $employee->status = $request->status;
        $employee->branch_id = $request->h_branchId;
        $employee->save();

        return redirect('/branch/detailed/' . $request->h_branchId)->with('success', 'Запись успешно добавлена!');
    }
}
