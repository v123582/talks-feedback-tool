@extends('layouts.app')

@section('content')

<div style="background-image:url('../images/final.png'); width:100%; height:500px;background-repeat: round;position: relative;">
user : {{$loginUserId}}
{{$votes}}



<center>
  <button style="margin-right:25px;margin-top:50px;" class="btn btn-primary" onclick="" >分享到ＦＢ</button>
  <button style="margin-top:50px;" class="btn btn-danger" onclick="location.href='/'">回到主畫面</button>
</center>

</div>
@endsection('content')
