<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Redirect;
use App\User;
use App\Speaker;
use App\Vote;

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
     return view('result', compact('loginUserId','userVotes'));
   }

}
