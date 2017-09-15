<?php

namespace App\Http\Controllers;

use App\Active_Initiative;
use Illuminate\Http\Request;
use App\Http\Requests\ActivitiesRequest;
use App\helper;

class ActivesController extends Controller
{
    //
    public function index()
    {
        $Actives = Active_Initiative::get();
        return view('Activities.view', compact('Actives'));
    }

    public function create()
    {
        return view('Activities.Add');
    }

    public function insert(ActivitiesRequest $request)
    {
        $picture = $request->file('picture');
        $file = $picture->getClientOriginalName();
        helper::image($file, $picture);
        $data = $request->all();
        $data['picture'] = $file;
        Active_Initiative::create($data);
        helper::true();
        return back();
    }

    public function edit($id)
    {
        $Active = Active_Initiative::where(['id' => $id])->first();
        return view('Activities.edit', compact('Active'));
    }

    public function update(ActivitiesRequest $request, $id)
    {

        $data = Active_Initiative::findOrFail($id);
        $data->update($request->all());
        helper::true();
        return back();
    }

    public function Destroy(Request $request)
    {
        $ids = $request->input('delete');
        if (empty($ids))
        {    // if no select tailor
            session()->flash('messageF', 'يجب اختيار نشاط ');
            return back();
        }
        else
            {
            foreach ($ids as $id)
            {  //  Directed by id

                Active_Initiative::destroy($id);
            }
            helper::true();
            return back();

        }
    }
}
