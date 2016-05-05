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
    public function show()
    {
        $speakers = Speaker::orderBy('id', 'asc')->paginate(10);
        return view('Speaker', compact('speakers'));
        //return view('Speaker');
    }
    public function vote($id)
    {
        return view('vote');
    }

    public function dovote()
    {
        $feel = Input::get('feel');
        echo $feel;
    }

}
