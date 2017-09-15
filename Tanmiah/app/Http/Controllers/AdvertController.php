<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Active_Initiative;
use App\Http\Requests\AdvertRequest;
use App\Advert;
use App\helper;
class AdvertController extends Controller
{
    public function create(){
        $Active_Initiative = Active_Initiative::where('types_id',2)->get();
        return view('Advert.create', compact('Active_Initiative'));

    }
    public function insert(AdvertRequest $request){
        $data = $request->all();
        $picture = $request->file('picture');
        $file = $picture->getClientOriginalName();
        helper::imageAdsTanmia($file, $picture);
        $data['picture'] = $file;
        $data['types_id'] = 1;
        $data = Advert::create($data);
        if ($data == true) {
            helper::true();
        } else {
            helper::false();
        }
        return back();

    }

    public function view(){
        $data = Advert::where('types_id',1)->get();
        return view('Advert.view', compact('data'));

    }
    public function edit($id){
        $data = Advert::findOrFail($id);
        $Active_Initiative = Active_Initiative::where('types_id',2)->get();
        return view('Advert.edit', compact('data','Active_Initiative'));
    }

    public function update(AdvertRequest $request, $id)
    {
        $id=  Advert::findOrFail($id);
        $data = $request->all();
        $picture = $request->file('picture');
        $file = $picture->getClientOriginalName();
        helper::imageAdsTanmia($file, $picture);
        $data['picture'] = $file;
        $data['types_id'] = 1;
        $id->update($data);
        if ($data == true) {
            helper::true();
        } else {
            helper::false();
        }
        return back();

    }

    public function Destroy($id)
    {
        if (Advert::findOrFail($id)->delete()) {
            helper::true();
        } else {
            helper::false();
        }
        return back();
    }
}
