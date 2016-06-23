<!DOCTYPE html>
<html>
<head>
	<title>TEDxHSINCHU</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

<body>
	<div class="main">
		<div class="bg"></div>

    <div style="position: absolute;top:5%;left:5%;color:white;">由這次&nbsp; TED&nbsp;talks &nbsp;我獲得了...</div>

		<img src="images/img/hand.png" class="hand">
		<img src="images/img/pour.gif" class="pour">
		<div class="diamond" style="color:white;">
      @foreach($votes as $vote)

        {{$vote->result}}
        @if($vote->result=="愛")
  			   <img src="images/img/red.png">
           
        @elseif($vote->result=="信心")
			     <img src="images/img/orange.png">
        @elseif($vote->result=="領導力")
			     <img src="images/img/black.png">
        @elseif($vote->result=="使命感")
			     <img src="images/img/lightblue.png">
        @elseif($vote->result=="實踐力")
			     <img src="images/img/blue.png">
        @elseif($vote->result=="創造力")
			     <img src="images/img/green.png">
        @elseif($vote->result=="智慧")
			     <img src="images/img/purple.png">
        @elseif($vote->result=="其他")
   			     <img src="images/img/tiffany.png">
        @else($vote->result=="啟發")
			     <img src="images/img/yellow.png">
        @endif
      @endforeach
		</div>

  </div>
  <div>
    <center>
      <a href="https://www.facebook.com/sharer.php?u={{ url('result/' . $loginUserId) }}" target="_blank" title="Facebook">
        <button  id="b1" class="btn btn-primary" onclick="" >分享到ＦＢ</button>
      </a>

      <button id="b2" class="btn btn-danger" onclick="location.href='/speakers'">回到主畫面</button>
    </center>
  </div>
  <div style="position: absolute;bottom:0;"><img width="10%" src="images/img/HC.png"></div>
  </body>
</html>
