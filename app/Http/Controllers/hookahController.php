<?php

namespace App\Http\Controllers;

use App\Models\bowls;
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

        $bowls_query = bowls::orderByDesc('id');
        $bowls = $bowls_query->paginate(0);

        return view('admin.hookah.dashboard', compact('hookahs', 'tobacco', 'bowls'));
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
        $hookah = hookah::create($request->all()); // create tobacco
        if ( isset($request->image) ) { // update logo
            $path = $request->file('image')->store('hookah', 'public'); // upload image
            $hookah->update([ 'image' => $path ]);
        }
        return redirect()->route('admin.hookah.index')->withSuccess('Created tobacco "' . $request->title . '"');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $hookah = hookah::where('id' , '=' , $id )->first();
        $hookah->update($request->all());
        if ( isset($request->image) ) { // update logo
            $path = $request->file('image')->store('hookah', 'public'); // upload image
            $hookah->update([ 'image' => $path ]);
        }
        if ( $request->removeImage )
            $hookah->update([ 'image' => null ]);

        return redirect()->route('admin.hookah.index')->withSuccess('Updated tobacco "' . $request->title . '"');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $hookah = hookah::where('id' , '=' , $id )->first();
        $hookah->delete();
        return redirect()->route('admin.hookah.index')->withErrors('Removed tobacco "' . $hookah->title . '"');
    }
}
