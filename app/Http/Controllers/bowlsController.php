<?php

namespace App\Http\Controllers;

use App\Models\bowls;
use Illuminate\Http\Request;

class bowlsController extends Controller
{
    // get
        public function get(Request $request)
        {
            $bowl = bowls::where('id' , '=' , $request->id )->first();
            return json_decode($bowl);
        }

    // create
        public function store(Request $request)
        {
            $bowl = bowls::create($request->all()); // create bowl
            if ( isset($request->image) ) { // update logo
                $path = $request->file('image')->store('bowl', 'public'); // upload image
                $bowl->update([ 'image' => $path ]);
            }
            return redirect()->route('admin.hookah.index')->withSuccess('Created bowl "' . $request->title . '"');
        }

    // update
        public function update($id, Request $request)
        {
            $bowl = bowls::where('id' , '=' , $id )->first();
            $bowl->update($request->all());

            if ( isset($request->image) ) { // update logo
                $path = $request->file('image')->store('bowl', 'public'); // upload image
                $bowl->update([ 'image' => $path ]);
            }
            return redirect()->route('admin.hookah.index')->withSuccess('Updated bowl "' . $request->title . '"');
        }

    // destroy
        public function destroy($id, Request $request)
        {
            $hookah = bowls::where('id' , '=' , $id )->first();
            $hookah->delete();
            return redirect()->route('admin.hookah.index')->withErrors('Removed bowl "' . $hookah->title . '"');
        }
}
