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
    //初始化頁面 取得講者 & 投票 結果
    $speakerId = $id;  //講者id
    $speaker = Speaker::findOrFail($id);

    $votes = DB::table('votes')->select(DB::raw('result, count(*) as count'))->where('speaker_id', $speakerId)->groupby('result')->get();  //投票結果
    $data = array();
    foreach($votes as $index => $value) {
      switch($value->result) {  //用中文取代投票result的編號
        case "1": $value->result = '愛'; break;
        case "2": $value->result = '使命感'; break;
        case "3": $value->result = '智慧'; break;
        case "4": $value->result = '實踐力'; break;
        case "5": $value->result = '領導力'; break;
        case "6": $value->result = '啟發'; break;
        case "7": $value->result = '信心'; break;
        case "8": $value->result = '創造力'; break;
        case "9": $value->result = '其他'; break;
      }
    }
    $votes = json_encode($votes);
    return view('chart', compact('votes','speaker'));
  }
  public function get()
  {
    //定時更新圖表資料
    $speakerId = $_GET['id'];
    $votes = DB::table('votes')->select(DB::raw('result, count(*) as count'))->where('speaker_id', $speakerId)->groupby('result')->get();
    $data = array();
    foreach($votes as $index => $value) {
      switch($value->result) {
        case "1": $value->result = '愛'; break;
        case "2": $value->result = '使命感'; break;
        case "3": $value->result = '智慧'; break;
        case "4": $value->result = '實踐力'; break;
        case "5": $value->result = '領導力'; break;
        case "6": $value->result = '啟發'; break;
        case "7": $value->result = '信心'; break;
        case "8": $value->result = '創造力'; break;
        case "9": $value->result = '其他'; break;
      }
    }
    $votes = json_encode($votes);
    return $votes;  //回傳json
  }
}
?>
