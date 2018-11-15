<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>RIMS System - Update Target Temperature</title>
  </head>
  <body>
    <h1>Update Target Temperature</h1>
    <div class='container'>
      <div class='row'>

        <div class='col-md-3'>
          <form action='api/targettemp/create.php' method='POST'>
            <div class="form-group">
              Current Target Temperature
              <div id='targettemp'> </div>
            </div>
            <div class="form-group">
              <label for="targettemperature">Set Target Temperature</label>
              <input  type='number' name="targettemperature" class="form-control" id="targettemperature" placeholder="Target Temperature">
            </div>
            <div class="form-group">

            </div>

            <input type="submit" class="btn btn-default" value='Submit'>
          </form>
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
      <!-- <script src="js/targettemppost.js"></script> -->
  </body>
</html>
