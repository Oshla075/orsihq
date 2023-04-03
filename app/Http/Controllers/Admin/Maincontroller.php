<?php

namespace App\Http\Controllers\Admin;

// use app\Helpers\Helper1;
use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class Maincontroller extends Controller
{
    public function index()
    {
        Alert::info('Welcome');
        return view('Admin.Layout.main');
    }

    public function mem_reg_form()
    {
        return view('Admin.Pages.registration_form');
    }

}
