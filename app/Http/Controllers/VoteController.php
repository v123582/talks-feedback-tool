<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use DB;
use App\Vote;
use App\Speaker;

class VoteController extends Controller
{
  public function show($id)
  {
    $speakerId = $id;
    $speaker = Speaker::findOrFail($id);
    $votes = DB::table('votes')->select(DB::raw('result, count(*) as count'))->where('speaker_id', $speakerId)->groupby('result')->get();
    // $index_array = array('1'=>'愛', '2'=>'願景', '3'=>'勇敢', '4'=>'自信', '5'=>'堅持', '6'=>'智慧', '7'=>'創意', '8'=>'實踐');
    $data = array();
    foreach($votes as $index => $value) {
      switch($value->result) {
        case "1": $value->result = '愛'; break;
        case "2": $value->result = '願景'; break;
        case "3": $value->result = '勇敢'; break;
        case "4": $value->result = '自信'; break;
        case "5": $value->result = '堅持'; break;
        case "6": $value->result = '智慧'; break;
        case "7": $value->result = '創意'; break;
        case "8": $value->result = '實踐'; break;
      }
    }
    $votes = json_encode($votes);
    return view('chart', compact('votes','speaker'));
  }
}
?>
