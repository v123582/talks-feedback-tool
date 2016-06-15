@extends('layouts.app')

@section('content')

<div style="background-image:url('../images/final.png'); width:100%; height:500px;background-repeat: round;position: relative;">

<div style="position: absolute;top:10%;left:25%;">
  <br />
  @foreach($votes as $vote)
  {{$vote->result}}
  {{$vote->count}}
  <br />
  @endforeach
</div>


<center>
  <button style="position: absolute; bottom: 10px; left:30px;" class="btn btn-primary" onclick="" >分享到ＦＢ</button>
  <button style="position: absolute; bottom: 10px; right:30px;" class="btn btn-danger" onclick="location.href='/'">回到主畫面</button>
</center>

</div>
@endsection('content')
