<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\ReservationListRequest;

class EditReservationController extends Controller
{
    //
    public function edit(Request $request)
    {
      $item = DB::table('reservationlists')->where('id', $request->id)->first();
      return view('editreservation.edit', ['item' => $item]);
    }

    public function update(ReservationListRequest $request)
    {
      $param =
      [
        'name' => $request->name,
        'date' => $request->date,
        'starttime' => $request->starttime,
        'endtime' => $request->endtime,
        'court' => $request->court,
      ];

      DB::table('reservationlists')->where('id', $request->id)->update($param);
      return redirect('/reslist');
    }
}
