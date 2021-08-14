<?php

namespace App\Http\Controllers;

use App\Models\tobacco;
use Illuminate\Http\Request;

class tobaccoController extends Controller
{
    public function get(Request $request)
    {
        $hookah = tobacco::where('id' , '=' , $request->id )->first();
        return json_decode($hookah);
    }
}
