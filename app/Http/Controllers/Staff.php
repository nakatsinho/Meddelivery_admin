<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Staff extends Controller
{
   
    public function fixing()
    {
        return view('pages.fixing');
    }

    public function modal()
    {
        return view('pages.Admin.modals.modal1');
    }
}
