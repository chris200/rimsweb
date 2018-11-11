<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>RIMS System</title>
  </head>
  <body>
    <h1>RIMS</h1>
    <div class='container'>
      <div class='row'>
        <div class='col-md-3 bg-light'>
          <div class='row'>
            <div class='col-md-12 bg-light'>
              <h4>  Settings </h4>
            </div>
          </div>
          <div class='row'>
            <div class='col-md-12 bg-light'>
              <form action="api/targettemp/create.php" method="POST" id='targettempform' >
                    <div class="form-group">
                      <label for="targettemp">Target Temperature</label>
                      <input type="number" min="0" max="200" step=".1"  class="form-control" name="targettemperature" aria-describedby="" placeholder="Enter Target Temperature">
                      
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>



          </div>
          <div class='row'>
            <div class='col-md-12 bg-light'>
              <form>
                    <div class="form-group">
                      <label for="Kp">Kp</label>
                      <input type="number" min="-100" max="100" step=".00000001"  class="form-control" id="Kp" aria-describedby="" placeholder="Enter Kp">
                      <label for="Kip">Ki</label>
                      <input type="number" min="-100" max="100" step=".00000001"  class="form-control" id="Ki" aria-describedby="" placeholder="Enter Ki">
                      <label for="Kd">Kd</label>
                      <input type="number" min="-100" max="100" step=".00000001"  class="form-control" id="Kd" aria-describedby="" placeholder="Enter Kd">
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
          </div>
        </div>
        <div class='col-md-3 bg-light'>
          Current Temp:<div id='currenttemp'></div>
        </div>
        <div class='col-md-3 bg-light'>
          Target Temp:<div id='targettemp'></div>
        </div>
        <div class='col-md-3 bg-light'>
          Running Graph
        </div>
      </div>

    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="js/currenttemp.js" ></script>
      <script src="js/targettemp.js" ></script>

  </body>
</html>
