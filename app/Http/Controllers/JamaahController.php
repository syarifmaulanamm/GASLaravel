<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JamaahController extends Controller
{
    public function index(Request $request)
    {
        return view('jamaah.index');
    }

    public function create(Request $request)
    {
        return view('jamaah.create');
    }

    public function doCreate(Request $request)
    {
        return redirect()->route('uploadFileJamaah');
    }

    public function upload(Request $request)
    {
        return view('jamaah.upload');
    }

    public function afterCreate(Request $request)
    {
        return view('jamaah.AfterCreate');
    }
}
