<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Redirect;
use App\User;
use App\Speaker;

class SpeakerController extends Controller
{
    // 顯示所有演講
    public function showAll()
    {
        $speakers = Speaker::orderBy('id', 'asc')->paginate(10);
        return view('Speakers', compact('speakers'));
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
        $options = Input::get('feel');
        print_r(compact('loginUserId', 'speakerId', 'options'));
    }

}