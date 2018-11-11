$( document ).ready(function() {
//readLast()

setInterval(readLast,3000);
})

function readLast(){
 defer = $.Deferred();
  $.getJSON("http://192.168.86.109/api/temp/read.php", function(data){
//  console.log(data.temp);
  //  return defer.promise();

    displayCurrent(data);
  });
};

function displayCurrent(data){
  var temp;
  console.log(data);
  temp=data.records[0].temperature;

  $("#currentAT").html(temp);

};
