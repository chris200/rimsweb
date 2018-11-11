$( document ).ready(function() {

//
//readLast(1);
//readLast(2);
//readLast(3);
//readLast(4);
readAll();

 setInterval(function() {
   readAll()},15000);
//
});




function readLast(sensor_int){
  $.getJSON("http://192.168.86.14/ThirstyFive/api/temp/read_last.php?sensor_int=" + sensor_int +"", function(data){
//  console.log(data.temp);
    displayCurrent(data,sensor_int);
  });
};

function displayCurrent(data,sensor_int){
  var temp;
  //console.log(data);
  temp=data.temp;
  //$("#current"+sensor_int).html(data.timestamp+ " " + temp);
  //console.log(data.temp);
  $("#canvas"+sensor_int).attr("data-value",data.temp);
  $("#time"+sensor_int).html(data.timestamp);
};



function readAll(){
  readLast(1);
  readLast(2);
  readLast(3);
  readLast(4);
}
