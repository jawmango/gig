<?php

namespace App\Http\Controllers;

use App\Models\gig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $admin = false;

     $gigs = Gig::all();

    if ($user != null) {
        if ($user->isAdmin) {
          $admin = true;
        $gigs = Gig::where('user_id', '=', $user->id)->get();
        }
    }

return view('discover', ['gigs' => $gigs, 'admin' => $admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addGig');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function show(gig $gig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function edit(gig $gig)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gig $gig)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function destroy(gig $gig)
    {
        //
    }
}
