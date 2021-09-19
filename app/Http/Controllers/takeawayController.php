<?php

namespace App\Http\Controllers;

use App\Models\takeaway;
use Illuminate\Http\Request;

class takeawayController extends Controller
{
    // index
    public function index()
    {
        $delivery = takeaway::first();

        $count = takeaway::count();
        $skip = 1;
        $limit = $count - $skip;
        $takeaway_query = takeaway::skip($skip)->take($limit)->get();

        $takeaway = $takeaway_query;

        return view('admin.takeaway.dashboard', compact('takeaway', 'delivery'));
    }

    // get
      public function get(Request $request)
        {
            $takeaway = takeaway::where('id' , '=' , $request->id )->first();
            return json_decode($takeaway);
        }

    // create
      public function store(Request $request)
        {
            $takeaway = takeaway::create($request->all()); // create takeaway

            if ( isset($request->image) ) { // update logo
                $path = $request->file('image')->store('takeaway', 'public'); // upload image
                $takeaway->update([ 'image' => $path ]);
            }

            return redirect()->route('admin.takeaway.index')->withSuccess('Created brand "' . $request->title . '"');
        }

    // update
      public function update(Request $request)
        {
            $takeaway = takeaway::where('id' , '=' , $request->id )->first();
            $takeaway->update($request->all());

            if ( isset($request->image) ) { // update logo
                $path = $request->file('image')->store('takeaway', 'public'); // upload image
                $takeaway->update([ 'image' => $path ]);
            }

            return redirect()->route('admin.takeaway.index')->withSuccess('Updated brand "' . $request->title . '"');
        }

    // delete
      public function destroy(Request $request)
        {
            $takeaway = takeaway::where('id' , '=' , $request->id )->first();
            $takeaway->delete();
            return redirect()->route('admin.takeaway.index')->withErrors('Removed brand "' . $takeaway->title . '"');
        }
}
