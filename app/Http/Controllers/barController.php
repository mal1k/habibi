<?php

namespace App\Http\Controllers;

use App\Models\bar;
use Illuminate\Http\Request;

class barController extends Controller
{
  // index
    public function index()
        {
            $beerFirst = bar::where('category' , '=' , 'beer' )->first();
            $beerSecond = bar::where('category' , '=' , 'beer' )->skip(1)->first();
            $bar_query = bar::orderByDesc('id');
            $bar = $bar_query->get();

            return view('admin.bar.dashboard', compact('bar', 'beerFirst', 'beerSecond'));
        }

  // get
    public function get(Request $request)
        {
            $bar = bar::where('id' , '=' , $request->id )->first();
            return json_decode($bar);
        }

  // create
    public function store(Request $request)
        {
            $bar = bar::create($request->all()); // create bar

            if ( isset($request->image) ) { // update logo
                $path = $request->file('image')->store('bar', 'public'); // upload image
                $bar->update([ 'image' => $path ]);
            }

            return redirect()->route('admin.bar.index')->withSuccess('Created brand "' . $request->title . '"');
        }

  // update
    public function update(Request $request)
        {
            $bar = bar::where('id' , '=' , $request->id )->first();
            $bar->update($request->all());

            if ( isset($request->image) ) { // update logo
                $path = $request->file('image')->store('bar', 'public'); // upload image
                $bar->update([ 'image' => $path ]);
            }

            return redirect()->route('admin.bar.index')->withSuccess('Updated brand "' . $request->title . '"');
        }

  // delete
    public function destroy(Request $request)
        {
            $bar = bar::where('id' , '=' , $request->id )->first();
            $bar->delete();
            return redirect()->route('admin.bar.index')->withErrors('Removed brand "' . $bar->title . '"');
        }
}
