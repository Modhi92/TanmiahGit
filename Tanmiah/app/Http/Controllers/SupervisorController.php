<?php

namespace App\Http\Controllers;

use App\helper;
use Illuminate\Http\Request;
use App\Http\Requests\SupervisorRequest;
use App\Supervisor;
class SupervisorController extends Controller
{
    public function index(){
        $data = Supervisor::get();

        return view('Supervisor.view',compact('data'));
    }

    public function create(){
        return view('Supervisor.create');
    }

    public function insert(SupervisorRequest $request){
        if(Supervisor::create($request->all())){
            helper::true();
        }else{
            helper::false();
        }
        return back();
    }

    public function edit($id){
        $data = Supervisor::findOrFail($id);
        return view('Supervisor.edit',compact('data'));
    }

    public function update(SupervisorRequest $request, $id)
    {
        $data = Supervisor::findOrFail($id);
        if ($data->update($request->all())) {
            helper::true();
        } else {
            helper::false();
        }
        return back();
    }

    public function Destroy($id)
    {
        if (Supervisor::findOrFail($id)->delete()) {
            helper::true();
        } else {
            helper::false();
        }
        return back();
    }




}
