<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkArchive;

class WorkArchiveController extends Controller
{
    public function work_url_post(Request $request){

        $workArchive = new WorkArchive();

        $workArchive->id = $request->id;
        $workArchive->url = $request->url;


        $workArchive->save();
        return redirect()->back()->with('message','Placement Added Succesfully');
    }
    public function index(){
        $int = WorkArchive::all();
        return view('admin.',compact('int'));

    }
}
