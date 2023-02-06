<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interview;

class UrlIntController extends Controller
{
    public function reint()
    {

            $data = interview::all();
            return view('frontend.reint',compact('data'));

    }
}
