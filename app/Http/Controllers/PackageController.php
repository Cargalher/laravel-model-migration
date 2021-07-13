<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Package;
class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        // ddd($packages);
        return view('packages.index', compact('packages'));
    }
}
