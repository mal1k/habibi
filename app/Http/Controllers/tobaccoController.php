<?php

namespace App\Http\Controllers;

use App\Models\tobacco;
use Illuminate\Http\Request;

class tobaccoController extends Controller
{
    public function get(Request $request)
    {
        $tobacco = tobacco::where('id' , '=' , $request->id )->first();
        return json_decode($tobacco);
    }

    // create
    public function store(Request $request)
    {
        tobacco::create($request->all()); // create tobacco
        return 'ok';
    }

    // update
    public function update(Request $request)
    {
        $tobacco = tobacco::where('id' , '=' , $request->tobacco_id )->first();
        $tobacco->update($request->all());
        return 'ok';
    }
}
