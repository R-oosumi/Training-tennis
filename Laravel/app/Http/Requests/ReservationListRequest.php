<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use DB;

class ReservationListRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      if($this->path() == 'newres' || 'editres')
      {
        return true;
      }
      else
      {
        return false;
      }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      //
      $date = DB::table('reservationlists')->
      where([
        ['id', '<>', $this->id],
        ['date', $this->date],
        ['endtime', '>', $this->starttime],
        ['court', $this->court],
      ])->
      exists();


      if ($this->id)
      { // 編集画面の時
        if($date === true)
        {
          $unique = 'unique:reservationlists,court';
        }
        else
        {
          $unique = '';
        }
      }
      else
      { // 新規登録画面の時
        if($date === true)
        {
          $unique = 'unique:reservationlists,court';
        }
        else
        {
          $unique = '';
        }
      }

      return
      [
        'name' => 'required|katakana',
        'date' => 'required|after:yesterday',
        'starttime' => 'required',
        'endtime' => 'required|after:starttime',
        'court' => ''.$unique,
      ];
    }
}
