<?php

namespace App\Http\Controllers;

use App\Models\home;
use App\Models\User;
use Illuminate\Http\Request;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(home $home)
    {
        $home = home::query()->first();
        return view('admin.home.dashboard', compact('home'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ( home::query()->first() )
            return dd('Ошибка. Конфигуратор уже существует.');

        return home::create($request->all());
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
       home::first()->update($request->all());

        // update images
            foreach ( $request->file() as $name => $path ) { // update cover
                $path = $request->file($name)->store('home', 'public'); // upload cover to server
                home::first()->update([ "$name" => "$path" ]);
            }


        return redirect()->route('admin.home.dashboard')->with('alert-success', ' Success');
    }
}
