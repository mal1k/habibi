<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;

class servicesController extends Controller
{
    // index
      public function index()
        {
            $services_query = services::orderByDesc('id');
            $services = $services_query->get();

            return view('admin.services.dashboard', compact('services'));
        }

  // get
    public function get(Request $request)
        {
            $services = services::where('id' , '=' , $request->id )->first();
            return json_decode($services);
        }

  // create
    public function store(Request $request)
        {
            $services = services::create($request->all()); // create services

            if ( isset($request->image) ) { // update logo
                $path = $request->file('image')->store('services', 'public'); // upload image
                $services->update([ 'image' => $path ]);
            }

            return redirect()->route('admin.services.index')->withSuccess('Created brand "' . $request->title . '"');
        }

  // update
    public function update(Request $request)
        {
            $services = services::where('id' , '=' , $request->id )->first();
            $services->update($request->all());

            if ( isset($request->image) ) { // update logo
                $path = $request->file('image')->store('services', 'public'); // upload image
                $services->update([ 'image' => $path ]);
            }

            return redirect()->route('admin.services.index')->withSuccess('Updated brand "' . $request->title . '"');
        }

  // delete
    public function destroy(Request $request)
        {
            $services = services::where('id' , '=' , $request->id )->first();
            $services->delete();
            return redirect()->route('admin.services.index')->withErrors('Removed brand "' . $services->title . '"');
        }
}
