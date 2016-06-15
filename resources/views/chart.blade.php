@extends('layouts.app')

@section('content')

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

<div class="row">
  <div class="col-xs-12">
    <p id="speakerId" style="display:none;">{{ $speaker->id }}</p>
    講師 : {{ $speaker->name }}<br>
    時段 :
    @if($speaker->event == 0) 早上
    @else 下午
    @endif
  </div>
</div>

<div class="row">
  <div class="col-xs-12">
    <div id="chartdiv"></div>
  </div>
</div>

@endsection
