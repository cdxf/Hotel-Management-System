<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Booking;
use App\User;
use App\Guest;
use App\Checkout;
use App\Room;

class CheckoutController extends Controller
{
    
    /**
     * list all checkout
     * @return [type] [description]
     */
    public function checkoutPreview($room){
        $data['title'] = "Checkout Preview";
        $data['booking']= $booking = Booking::where('room_name', $room)->first();
        $data['guest'] = Guest::where('id', $booking['guest_id'])->first();

        $data['total'] = 100;
        return view('receiption/checkoutPreview',$data);
    }
    public function listCheckout()
    {
        //
    }

   /**
    * add a checkout
    * @param  Request $request [description]
    * @return [type]           [description]
    */
    public function addCheckout(Request $request)
    {
        $checkout = new Checkout;
        $checkout = $request->all();
        Checkout::create($checkout);
        //update status room
         Room::where('name', $checkout['room_name'])->update(array('status'=> 'A'));
          return redirect()->route('listroom_com');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
