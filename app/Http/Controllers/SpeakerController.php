<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use DB;
use Redirect;
use App\User;
use App\Speaker;
use App\Vote;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SpeakerController extends Controller
{
    // 顯示所有演講
    public function showAll()
    {
        $speakers = Speaker::orderBy('id', 'asc')->paginate(10);
        $userVotes = Auth::user()->votes;
        $userSpeakerVotes = array();
        foreach($userVotes as $key => $value) {
            $userSpeakerVotes[$value['speaker_id']] = $value['result'];
        }
        $voteDone = false;
        if(count($userSpeakerVotes) == count($speakers))
            $voteDone = true;

        return view('Speakers', compact('speakers', 'userSpeakerVotes', 'voteDone'));
    }
    // 顯示單一演講
    public function showOne($id)
    {
        $speakerId = $id;
        $speaker = Speaker::findOrFail($id);
        return view('Speaker', compact('speaker'));
    }

    // 對於單一演講投票
    public function vote($id)
    {
        $loginUserId = Auth::user()->id;
        $speakerId = $id;
        $options = Input::get('feeling1');
        foreach($options as $option) {
          $userVotes = array('user_id' => (string)$loginUserId, 'speaker_id' => $speakerId, 'result' => $option);
          Vote::create($userVotes);
        }
        // $userVotes = array('user_id' => (string)$loginUserId, 'speaker_id' => $speakerId, 'result' => implode(",",$options));
        // Vote::create($userVotes);
        return redirect()->route("speakers")->with('message', 'Update Successfully: Vote to Speaker '.$speakerId.' with Options '.implode(",",$options));
   }

   public function result()
   {
     $loginUserId = Auth::user()->id;
     $userVotes = Auth::user()->votes;
     $votes = DB::table('votes')->select(DB::raw('result, count(*) as count'))->where('user_id', $loginUserId)->groupby('result')->get();

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

     return view('result', compact('loginUserId','userVotes','votes'));
   }


   public function resultShare($id)
   {
     
     

        try {
            $user = User::findOrFail($id);
            $loginUserId = $user->id;
            $loginUserEmail = $user->email;
            $userVotes =$user->votes;
            $votes = DB::table('votes')->select(DB::raw('result, count(*) as count'))->where('user_id', $loginUserId)->groupby('result')->get();

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
            

            return view('resultShare', compact('loginUserId', 'loginUserEmail','userVotes','votes'));
        } catch (ModelNotFoundException $ex) {
          return 'error';
        }
    }
}
