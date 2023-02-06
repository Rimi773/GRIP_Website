<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internship;

class CompanyController extends Controller
{
    public function show()
    {

            $data = internship::all();
            return view('admin.company',compact('data'));

    }
    public function delete($id)
    {

        $user = internship::find($id);
        $user -> delete();

        return redirect()->back();

    }
}
