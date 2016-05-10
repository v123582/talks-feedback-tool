<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Speaker;

class SpeakerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('speakers')->delete();
      Speaker::create(array(
        'name'     => 'speaker1',
        'photo'     => 'http://placehold.it/750x450',
        'topic'     => 'topic one',
        'description' => 'nice men',
        'period' => '2016/05/20',
       ));
      Speaker::create(array(
        'name'     => 'speaker2',
        'photo'     => 'http://placehold.it/750x450',
        'topic'     => 'topic two',
        'description' => 'nice men',
        'period' => '2016/05/20',
      ));
      Speaker::create(array(
        'name'     => 'speaker3',
        'photo'     => 'http://placehold.it/750x450',
        'topic'     => 'topic three',
        'description' => 'nice men',
        'period' => '2016/05/20',
      ));
      Speaker::create(array(
        'name'     => 'speaker4',
        'photo'     => 'http://placehold.it/750x450',
        'topic'     => 'topic four',
        'description' => 'nice men',
        'period' => '2016/05/20',
      ));
    }
}
