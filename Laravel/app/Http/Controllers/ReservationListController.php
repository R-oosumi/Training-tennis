<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservationlist;
use DB;

class ReservationListController extends Controller
{
    //並び替えは予約日だけでいいと思う
    public function index(Request $request)
    {
      $sort = $request->sort;
      $items = Reservationlist::orderBy($sort, 'asc')->paginate(10);
      $param =
      [
        'items' => $items,
        'sort' => $sort,
      ];
      return view('reservationlist.index', $param);
    }
}
