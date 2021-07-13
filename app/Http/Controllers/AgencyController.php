<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\agency;

class AgencyController extends Controller
{
    public function index()
    {
        $agency = Agency::all();
        return view ('agency', compact('packages'));
    }
}
