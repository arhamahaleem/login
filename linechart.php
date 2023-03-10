<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Basic Line Chart - Apache ECharts Demo</title>

  <style>
    * {
  margin: 0;
  padding: 0;
}
#chart-container {
  position: relative;
  height: 100vh;
  overflow: hidden;
}

  </style>
</head>
<body>
  <div id="chart-container"></div>


  <script src="https://fastly.jsdelivr.net/npm/echarts@5.4.1/dist/echarts.min.js"></script>

  <script>
    var dom = document.getElementById('chart-container');
var myChart = echarts.init(dom, null, {
  renderer: 'canvas',
  useDirtyRect: false
});
var app = {};

var option;

option = {
  xAxis: {
    type: 'category',
    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
  },
  yAxis: {
    type: 'value'
  },
  series: [
    {
      data: [150, 230, 224, 218, 135, 147, 260],
      type: 'line'
    }
  ]
};

if (option && typeof option === 'object') {
  myChart.setOption(option);
}

window.addEventListener('resize', myChart.resize);
  </script>
</body>
</html>