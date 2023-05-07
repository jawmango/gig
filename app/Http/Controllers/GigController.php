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
        // get the filename of image uploaded
        $filename = $request->img->getClientOriginalName();
        // store in public folder
        $request->img->move(public_path('img'), $filename);
        $gig = Gig::create([
        'performer_name' => $request['performer_name'],
        'price' => $request['gig_price'],
        'description' => $request['description'],
        'gig_type' => $request['gig_type'],
        'img' => $filename,
        'user_id' => Auth::id()
]);
return redirect('discover');
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
    public function edit($id)
    {
        $gig = Gig::find($id);
        return view('editGig', ['gig' => $gig]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gig = Gig::find($id);
        if ($request->hasFile('img')) {
            $filename = $request->photo->getClientOriginalName();
            $request->img->move(public_path('img'), $filename);
        } else {
            $filename = $gig->img;
        }
        $gig->performer_name = $request->performer_name;
        $gig->price = $request->gig_price;
        $gig->description = $request->description;
        $gig->gig_type = $request->gig_type;
        $gig->img = $filename;
        $gig->save();
        return redirect("discover");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gig  $gig
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gig = Gig::find($id);


        $gig->delete();
        return redirect("discover");

    }

    public function ratings()
{
    return $this->hasMany(Rating::class);
}



}
