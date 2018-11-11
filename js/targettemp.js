$( document ).ready(function() {
//readLast()

setInterval(readTarget,3000);
})

function readTarget(){
 defer = $.Deferred();
  $.getJSON("http://192.168.86.109/api/targettemp/read.php", function(data){
//  console.log(data.temp);
  //  return defer.promise();

    displayTarget(data);
  });
};

function displayTarget(data){
  var temp;
  console.log(data);
  temp=data.records[0].targettemperature;

  $("#targettemp").html(temp);

};
