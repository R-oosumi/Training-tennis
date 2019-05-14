<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DeleteReservationController extends Controller
{
    //
    public function delete(Request $request)
    {
      $item = DB::table('reservationlists')->where('id', $request->id)->first();
      return view('deletereservation.delete', ['item' => $item]);
    }

    public function remove(Request $request)
    {
      DB::table('reservationlists')->where('id', $request->id)->delete();
      return redirect('/reslist');
    }
}
