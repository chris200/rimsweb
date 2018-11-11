$( document ).ready(function() {
//readLast()

setInterval(readCurrent,3000);
})

function readCurrent(){
 defer = $.Deferred();
  $.getJSON("http://192.168.86.109/api/currenttemp/read.php", function(data){
//  console.log(data.temp);
  //  return defer.promise();

    displayCurrent(data);
  });
};

function displayCurrent(data){
  var temp;
  console.log(data);
  temp=data.records[0].temperature;

  $("#currenttemp").html(temp);

};
