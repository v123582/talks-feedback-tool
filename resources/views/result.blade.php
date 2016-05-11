@extends('layouts.app')

@section('content')

user : {{$loginUserId}}

@foreach($userVotes as $vote)
{{$vote}}
@endforeach

<center>
  <button style="margin-right:25px;" class="btn btn-primary" onclick="">分享到ＦＢ</button>
  <button class="btn btn-danger" onclick="location.href='/'">回到主畫面</button>
</center>

@endsection('content')
