<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\gig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $performer_name = $request->input('performer_name');
        return view('addBooking', ['performer_name' => $performer_name]);
    }   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking = Booking::create([
            'performer_name' => $request['performer_name'],
            'client_name' => $request['client_name'],
            'client_email' => $request['client_email'],
            'phone' => $request['client_phone'],
            'gig_location' => $request['gig_location'],
            'date' => $request['gig_date'],
            'user_id' => Auth::id()
        ]);
        return redirect('booking');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        if (Auth::check()) {
            $user_id = auth()->user()->id; // retrieve the authenticated user ID
    
            $data = Booking::where('user_id', $user_id)->get(); // retrieve bookings for the user
    
            return view('booking', ['bookings'=>$data]);
        } else {
            // Redirect the user to the login page or show an error message
            return redirect('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id); // find the booking by ID
    $booking->delete(); // delete the booking
    return redirect("booking");
    }
}
