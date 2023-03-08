<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Smoothed Line Chart - Apache ECharts Demo</title>
  <style>* {
  margin: 0;
  padding: 0;
}
#chart-container {
  position: relative;
  height: 100vh;
  overflow: hidden;
}</style>

</head>
<body>
  <div id="chart-container"></div>
  <script src="https://fastly.jsdelivr.net/npm/echarts@5/dist/echarts.min.js"></script>
  <script>var dom = document.getElementById('chart-container');
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
      data: [0, 932, 901, 934, 1290, 1330, 1320],
      type: 'line',
      smooth: true
    }
  ]
};

if (option && typeof option === 'object') {
  myChart.setOption(option);
}

window.addEventListener('resize', myChart.resize);</script>
</body>
</html>