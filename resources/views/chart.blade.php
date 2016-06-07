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
  font-size: 11px;
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
var chartData = <?php echo $votes; ?>;
</script>
<div id="chartdiv"></div>

@endsection
