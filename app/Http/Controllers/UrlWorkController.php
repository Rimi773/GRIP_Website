<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Workshop;


class UrlWorkController extends Controller
{

    public function rework()
    {

            return view('frontend.rework');

    }

}
