<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Vote;

class VotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('votes')->delete();
        Vote::create(array(
          'user_id'   => '1',
          'speaker_id'  => '1',
          'result'    => '1',
        ));
        Vote::create(array(
          'user_id'   => '1',
          'speaker_id'  => '2',
          'result'    => '3',
        ));
        Vote::create(array(
          'user_id'   => '2',
          'speaker_id'  => '1',
          'result'    => '3',
        ));
        Vote::create(array(
          'user_id'   => '2',
          'speaker_id'  => '2',
          'result'    => '3',
        ));
        Vote::create(array(
          'user_id'   => '2',
          'speaker_id'  => '3',
          'result'    => '3',
        ));
        Vote::create(array(
          'user_id'   => '2',
          'speaker_id'  => '4',
          'result'    => '3',
        ));
    }
}
