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
        'name_id'     => '1',
        'speak_id'     => 'speak1',
        'result' => '愛,勇氣,希望',
       ));
       Vote::create(array(
        'name_id'     => '1',
        'speak_id'     => 'speak2',
        'result' => '畢業',
       ));
       Vote::create(array(
        'name_id'     => '1',
        'speak_id'     => 'speak3',
        'result' => 'yo',
       ));
    }
}
