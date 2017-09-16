<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Productive_familyRequest;
use App\Productive_family;
use App\helper;
class Productive_familyController extends Controller
{

    public function index(){
        $data = Productive_family::get();

        return view('Productive_family.view',compact('data'));
    }
    public function create(){
        return view('Productive_family.create');
    }

    public function insert(Productive_familyRequest $request){
        if(Productive_family::create($request->all())){
            helper::true();
        }else{
            helper::false();
        }
        return back();
    }

    public function edit($id){
        $data = Productive_family::findOrFail($id);
        return view('Productive_family.edit',compact('data'));
    }

    public function update(Productive_familyRequest $request, $id)
    {
        $data = Productive_family::findOrFail($id);
        if ($data->update($request->all())) {
            helper::true();
        } else {
            helper::false();
        }
        return back();
    }

    public function Destroy($id)
    {
        if (Productive_family::findOrFail($id)->delete()) {
            helper::true();
        } else {
            helper::false();
        }
        return back();
    }

}
