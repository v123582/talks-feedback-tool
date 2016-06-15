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
        'photo'     => './images/speaker1.png',
        'vphoto'     => './images/vspeaker1.png',
        'topic'     => 'topic one',
        'description' => 'nice men',
        'event' => '0', //a.m: 0 ,p.m:1
        'period' => '2016/05/20',
       ));
      Speaker::create(array(
        'name'     => 'speaker2',
        'photo'     => './images/speaker2.png',
        'vphoto'     => './images/vspeaker2.png',
        'topic'     => 'topic two',
        'description' => 'nice men',
        'event' => '0',
        'period' => '2016/05/20',
      ));
      Speaker::create(array(
        'name'     => 'speaker3',
        'photo'     => './images/speaker3.png',
        'vphoto'     => './images/vspeaker3.png',
        'topic'     => 'topic three',
        'description' => 'nice men',
        'event' => '0',
        'period' => '2016/05/20',
      ));
      Speaker::create(array(
        'name'     => 'speaker4',
        'photo'     => './images/speaker4.png',
        'vphoto'     => './images/vspeaker4.png',
        'topic'     => 'topic four',
        'description' => 'nice men',
        'event' => '0',
        'period' => '2016/05/20',
      ));
      Speaker::create(array(
        'name'     => 'speaker5',
        'photo'     => './images/speaker4.png',
        'vphoto'     => './images/vspeaker4.png',
        'topic'     => 'topic four',
        'description' => 'nice men',
        'event' => '1',
        'period' => '2016/05/20',
      ));
      Speaker::create(array(
        'name'     => 'speaker6',
        'photo'     => './images/speaker4.png',
        'vphoto'     => './images/vspeaker4.png',
        'topic'     => 'topic four',
        'description' => 'nice men',
        'event' => '1',
        'period' => '2016/05/20',
      ));
      Speaker::create(array(
        'name'     => 'speaker7',
        'photo'     => './images/speaker4.png',
        'vphoto'     => './images/vspeaker4.png',
        'topic'     => 'topic four',
        'description' => 'nice men',
        'event' => '1',
        'period' => '2016/05/20',
      ));
    }
}
