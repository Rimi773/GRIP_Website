<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interview;

class IntArchiveController extends Controller
{
    public function interview(Request $request)
    {

        $interview = new interview;

        $interview->url = $request->url;


        $interview->save();
        return redirect()->back()->with('message', 'URL Added Succesfully');
    }
}
