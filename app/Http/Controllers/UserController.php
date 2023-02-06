<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internship;

class UserController extends Controller
{
    public function show()
    {

            $data = internship::all();
            return view('user.user_company',compact('data'));

    }
}
