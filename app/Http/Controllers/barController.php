<?php

namespace App\Http\Controllers;

use App\Models\bar;
use Illuminate\Http\Request;

class barController extends Controller
{
  // index
    public function index()
        {
            $bar_query = bar::orderByDesc('id');
            $bar = $bar_query->paginate(0);

            return view('admin.bar.dashboard', compact('bar'));
        }

  // get
    public function get(Request $request)
        {
            $bar = bar::where('id' , '=' , $request->id )->first();
            return json_decode($bar);
        }
}
