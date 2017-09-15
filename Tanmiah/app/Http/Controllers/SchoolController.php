<?php

namespace App\Http\Controllers;

use App\Helpers;
use Illuminate\Http\Request;
use App\School;
use App\Http\Requests\SchoolRequest;
class SchoolController extends Controller
{
    public function index(){
        $schools = School::get();

        return view('school.view',compact('schools'));
    }

    public function create(){
        return view('school.create');
    }

    public function insert(SchoolRequest $request){
        if(School::create($request->all())){
            Helpers::true();
        }else{
            Helpers::false();
        }
        return back();
    }

    public function edit($id){
             $data = School::findOrFail($id);
        return view('school.edit',compact('data'));
    }

    public function update(SchoolRequest $request, $id)
    {
        $data = School::findOrFail($id);
        if ($data->update($request->all())) {
            Helpers::true();
        } else {
            Helpers::false();
        }
        return back();
    }

    public function Destroy($id)
    {
        if (School::findOrFail($id)->delete()) {
            Helpers::true();
        } else {
            Helpers::false();
        }
        return back();
    }




}
