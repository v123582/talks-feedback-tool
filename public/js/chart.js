$(document).ready(function() {
  var chart = AmCharts.makeChart("chartdiv", {
    "type": "pie",
    "startDuration": 0,
     "theme": "light",
    "addClassNames": true,
    "legend":{
     	"position":"right",
      "marginRight":10,
      "autoMargins":false,
      "marginTop": 0,
      "marginBottom": 0,
      "marginLeft":500,
      "marginRight": 0,
      "pullOutRadius": 0,
      "position": "bottom"
    },
    "innerRadius": "30%",
    "defs": {
      "filter": [{
        "id": "shadow",
        "width": "200%",
        "height": "200%",
        "feOffset": {
          "result": "offOut",
          "in": "SourceAlpha",
          "dx": 0,
          "dy": 0
        },
        "feGaussianBlur": {
          "result": "blurOut",
          "in": "offOut",
          "stdDeviation": 5
        },
        "feBlend": {
          "in": "SourceGraphic",
          "in2": "blurOut",
          "mode": "normal"
        }
      }]
    },
    "dataProvider": chartData,
    "valueField": "count",
    "titleField": "result",
    "export": {
      "enabled": true
    }
  });

  chart.addListener("init", handleInit);

  chart.addListener("rollOverSlice", function(e) {
    handleRollOver(e);
  });

  function handleInit(){
    chart.legend.addListener("rollOverItem", handleRollOver);
  }

  function handleRollOver(e){
    var wedge = e.dataItem.wedge.node;
    wedge.parentNode.appendChild(wedge);
  }

  //set timeInterval to get data
  setInterval(function () {
    var id = $('#speakerId').text();  //speaker id
    $.get('../getChart', {id:id}, function(data) {
      var data = $.parseJSON(data);
      chart.dataProvider = data;
      chart.validateData();
    });
  },5000)

});
