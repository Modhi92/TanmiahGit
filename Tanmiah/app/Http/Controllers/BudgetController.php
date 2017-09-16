<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Budget;
use App\Http\Requests\BudgetRequest;
use App\helper;
class BudgetController extends Controller
{
    public function index(){
        $data = Budget::get();

        return view('Budget.view',compact('data'));
    }

    public function create(){
        return view('Budget.create');
    }

    public function insert(BudgetRequest $request){
        if(Budget::create($request->all())){
            helper::true();
        }else{
            helper::false();
        }
        return back();
    }

    public function edit($id){
        $data = Budget::findOrFail($id);
        return view('Budget.edit',compact('data'));
    }

    public function update(BudgetRequest $request, $id)
    {
        $data = Budget::findOrFail($id);
        if ($data->update($request->all())) {
            helper::true();
        } else {
            helper::false();
        }
        return back();
    }

    public function Destroy($id)
    {
        if (Budget::findOrFail($id)->delete()) {
            helper::true();
        } else {
            helper::false();
        }
        return back();
    }




}
