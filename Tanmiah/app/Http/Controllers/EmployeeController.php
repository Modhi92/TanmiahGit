<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;
use App\Employee;
use App\helper;
use App\User;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $Employees = Employee::get();
        return view('Employee.ViewEmployee', compact('Employees'));
    }

    public function create()
    {

        return view('Employee.AddEmployee');
    }

    public function insert(EmployeeRequest $request)
    {
        DB::transaction(function () use ($request) {
            $data = $request->all();
            //User::create($data);
            Employee::create($data);
            helper::true();
        });

        return back();
    }

    public function edit($id)
    {

        $Employee = Employee::findBy(['id' => $id])->first();
        return view('Employee.Edit', compact('Employee'));

    }

    public function update(EmployeeRequest $request, $id)
    {

        $data = Employee::findOrFail($id);
        $data->update($request->all());
        helper::true();
        return back();
    }

}
