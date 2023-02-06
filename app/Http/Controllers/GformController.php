<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workshop;
use App\Models\Interview;

class GformController extends Controller
{
    public function addview()
    {
        return view('admin.gform');

    }
    public function workshop(Request $request)
    {

        $workshop = new workshop;

        $workshop->url = $request->url;


        $workshop->save();
        return redirect()->back()->with('message', 'URL Added Succesfully');
    }
    public function interview(Request $request)
    {

        $interview = new interview;

        $interview->url = $request->url;


        $interview->save();
        return redirect()->back()->with('message', 'URL Added Succesfully');
    }
}
