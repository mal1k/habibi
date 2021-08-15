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
            $tobacco = tobacco::create($request->all()); // create tobacco

            if ( isset($request->image) ) { // update logo
                $path = $request->file('image')->store('hookah/tobacco', 'public'); // upload image
                $tobacco->update([ 'image' => $path ]);
            }

            return redirect()->route('admin.hookah.index')->withSuccess('Created brand "' . $request->title . '"');
        }

    // update
        public function update(Request $request)
        {
            $tobacco = tobacco::where('id' , '=' , $request->tobacco_id )->first();
            $tobacco->update($request->all());

            if ( isset($request->image) ) { // update logo
                $path = $request->file('image')->store('hookah/tobacco', 'public'); // upload image
                $tobacco->update([ 'image' => $path ]);
            }

            return redirect()->route('admin.hookah.index')->withSuccess('Updated brand "' . $request->title . '"');
        }

    // delete
        public function destroy(Request $request)
        {
            $tobacco = tobacco::where('id' , '=' , $request->id )->first();
            $tobacco->delete();
            return redirect()->route('admin.hookah.index')->withErrors('Removed brand "' . $tobacco->title . '"');
        }
}
