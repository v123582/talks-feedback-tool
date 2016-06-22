@extends('layouts.share')

@section('content')

<div style="background-image:url('../images/final.png'); width:100%; height:500px;background-repeat: round;position: relative;">
<div style="position: absolute;top:5%;left:5%;">{{ $loginUserEmail }} <br> 在這次&nbsp; TED&nbsp;talks &nbsp;  獲得了...</div>
<div style="position: absolute;top:10%;left:25%;">
  <br />
  @foreach($votes as $vote)
  {{$vote->result}}
  {{$vote->count}}
  <br />
  @endforeach
</div>



</div>
@endsection('content')
