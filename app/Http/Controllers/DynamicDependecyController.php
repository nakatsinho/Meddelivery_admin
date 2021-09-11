<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DynamicDependecyController extends Controller
{
    public function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
    }
}
