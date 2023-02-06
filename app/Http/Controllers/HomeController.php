<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Internship;
use App\Models\Notice;
use App\Models\Interview;
use App\Models\Workshop;

class HomeController extends Controller
{
    public function redirect()
    {
        {
            $usertype = Auth::user()->usertype;
            if($usertype=='1')
            {
                $totalUser= user::count();
                $totalCompanies= internship::count();
                $totalNotice= notice::count();
                $totalInterview= interview::count();
                $totalWorkshop= workshop::count();
                return view('admin.admin',compact('totalUser','totalCompanies','totalNotice','totalInterview','totalWorkshop'));

            }
            if($usertype=='2')
            {
                return view('industry');
            }
            if($usertype=='0')
            {
                $totalCompanies= internship::count();
                return view('user.user', compact('totalCompanies'));
            }
        }

        $totalUser= user::count();
        $totalComapanies= internship::count();
        $totalNotice= notice::count();

    }





}
