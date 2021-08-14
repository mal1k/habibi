<?php

namespace App\Http\Controllers;

use App\Models\hookah;
use App\Models\tobacco;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class hookahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hookahs_query = hookah::orderByDesc('id');
        $hookahs = $hookahs_query->paginate(0);

        $tobacco_query = tobacco::orderByDesc('id');
        $tobacco = $tobacco_query->paginate(0);

        return view('admin.hookah.dashboard', compact('hookahs', 'tobacco'));
    }

    public function get(Request $request)
    {
        $hookah = hookah::where('id' , '=' , $request->id )->first();
        return json_decode($hookah);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        hookah::create($request->all()); // create tobacco
        return 'ok';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $hookah = hookah::where('id' , '=' , $request->hookah_id )->first();
        $hookah->update($request->all());
        return 'ok';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $hookah = hookah::where('id' , '=' , $request->id )->first();
        $hookah->delete();
        return 'ok';
    }
}
