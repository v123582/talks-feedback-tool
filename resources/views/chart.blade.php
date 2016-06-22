
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ted x Hsinchu</title>

    <style>
        body {
            font-family: '微軟正黑體';
        }
    </style>

<!-- jquery -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<!-- chart -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<!-- chart.js -->
<script src="../js/chart.js"></script>

<style>
#chartdiv {
  width: 100%;
  height: 500px;
  font-size: 14px;
  padding: 10px;
}

.amcharts-pie-slice {
  transform: scale(1);
  transform-origin: 50% 50%;
  transition-duration: 0.3s;
  transition: all .3s ease-out;
  -webkit-transition: all .3s ease-out;
  -moz-transition: all .3s ease-out;
  -o-transition: all .3s ease-out;
  cursor: pointer;
  box-shadow: 0 0 30px 0 #000;
}

.amcharts-pie-slice:hover {
  transform: scale(1.1);
  filter: url(#shadow);
}
</style>

<script>
var chartData = <?php echo $votes; ?>;  //頁面初始化
</script>
  <center><img src="../images/title.png"  width="25%" >
<div class="row">
  <div class="col-md-12" style="font-size:250%;">
    <img src="../{{$speaker->photo}}" width="150px;">
    <p id="speakerId" style="display:none;">{{ $speaker->id }}</p>
    <div style="position:relative; bottom:60px;display:inline;">講師 : {{ $speaker->name }}</div><br>
  </div>
</div>
</center>

<div class="row">
  <div class="col-md-12">
    <div id="chartdiv" style="font-size:250%;"></div>
  </div>
</div>
