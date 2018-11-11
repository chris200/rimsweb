$(document).ready(function() {

//
//readLast(1);
//readLast(2);
//readLast(3);
   readChartData(1);
   readChartData(2);
   readChartData(3);
   readChartData(4);



 setInterval(function() {
   readChartData(1);
   readChartData(2);
   readChartData(3);
   readChartData(4);
 },60000);
//
});

window.onload = function() {
readChartData(1);
readChartData(2);
readChartData(3);
readChartData(4);
};


function readChartData(sensor_int){
  $.getJSON("http://192.168.86.14/ThirstyFive/api/temp/read24hours.php?sensor_int=" + sensor_int +"", function(data){
//console.log(data);

    displayChart(data,sensor_int);
  });
};



function displayChart(data,sensor_int){
var labels=[];
var dataset=[];
$.each(data.records,function(index,item){
  labels.push(item.timestamp);
  dataset.push(item.temp);
})

//console.log(labels);

  var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
  var config = {
    type: 'line',
    data: {
      labels: labels,
      datasets: [{
        label: 'Sensor ' +sensor_int,
        backgroundColor: window.chartColors.red,
        borderColor: window.chartColors.red,
        data: dataset,
        fill: false,
      }]
    },
    options: {
      responsive: true,
      title: {
        display: true,
        text: 'Since Yesterday Morning'
      },
      tooltips: {
        mode: 'index',
        intersect: false,
      },
      hover: {
        mode: 'nearest',
        intersect: true
      },
      scales: {
        xAxes: [{
          display: true,
          scaleLabel: {
            display: true,
            labelString: 'Time'
          }
        }],
        yAxes: [{
          display: true,
          scaleLabel: {
            display: true,
            labelString: 'Temp'
          }
        }]
      }
    }
  };



  var ctx = document.getElementById('graph'+sensor_int).getContext('2d');
  window.myLine = new Chart(ctx, config);
}







var colorNames = Object.keys(window.chartColors);
