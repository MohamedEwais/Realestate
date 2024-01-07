<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgantController extends Controller
{
    public function AgantDashboard(){
        return view('agant.agant_dashboard');
    }
}
