<?php

namespace App\Http\Controllers;

use App\Models\bowls;
use Illuminate\Http\Request;

class bowlsController extends Controller
{
    // create
    public function store(Request $request)
    {
        bowls::create($request->all()); // create bowl
        return redirect()->route('admin.hookah.index')->withSuccess('Created bowl "' . $request->title . '"');
    }
}
