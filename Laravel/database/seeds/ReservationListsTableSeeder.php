<?php

use Illuminate\Database\Seeder;

class ReservationListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param =
        [
          'name' => 'アアア',
          'date' => '9999-12-31',
          'starttime' => '10:00',
          'endtime' => '11:00',
          'court' => '全面1番',
        ];
        DB::table('reservationlists')->insert($param);

        $param =
        [
          'name' => 'イイイ',
          'date' => '9999-12-31',
          'starttime' => '10:00',
          'endtime' => '11:00',
          'court' => '全面2番',
        ];
        DB::table('reservationlists')->insert($param);

        $param =
        [
          'name' => 'ウウウ',
          'date' => '9999-12-31',
          'starttime' => '10:00',
          'endtime' => '11:00',
          'court' => 'オートテニス1番',
        ];
        DB::table('reservationlists')->insert($param);

        $param =
        [
          'name' => 'エエエ',
          'date' => '9999-12-31',
          'starttime' => '10:00',
          'endtime' => '11:00',
          'court' => 'オートテニス2番',
        ];
        DB::table('reservationlists')->insert($param);

        $param =
        [
          'name' => 'オオオ',
          'date' => '9999-12-31',
          'starttime' => '10:00',
          'endtime' => '11:00',
          'court' => 'オートテニス3番',
        ];
        DB::table('reservationlists')->insert($param);
    }
}
