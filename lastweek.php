<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Thirsty Five Brewing Last Week</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="">




    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://192.168.86.14/ThirstyFive/css/style.css" rel="stylesheet">

  </head>
  <body>


  <div class="container-fluid">
    <div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <a class="navbar-brand" href="#">Thirsty Five Homebrewing </a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item active">
							 <a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="#">Link</a>
						</li>

					</ul>

					<ul class="navbar-nav ml-md-auto">
						<li class="nav-item active">
							 <a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a>
						</li>

					</ul>
				</div>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
            <div id="currentTime"></div>
          </div>
        </div>
			<div class="row">
				<div class="col-md-6">
        <div class="gaugeblock center-block" id="current1" >
        <canvas class="text-center" id="canvas1"
         data-type="radial-gauge"
        data-value="0"
        data-width="200"
        data-height="200"
        data-bar-width="10"
        data-bar-shadow="5"
        data-color-bar-progress="rgba(50,200,50,.75)">
        </canvas>
        <div id="time1"></div>
        </div>

				</div>
				<div class="col-md-6">
        <div class="gaugeblock center-block" id="current2">
        <canvas id="canvas2"
         data-type="radial-gauge"
        data-value="0"
        data-width="200"
        data-height="200"
        data-bar-width="10"
        data-bar-shadow="5"
        data-color-bar-progress="rgba(50,200,50,.75)">
        </canvas>
        <div id="time2"></div>
				</div>
        </div>
      </div>

			<div class="row">
				<div class="col-md-6">
        <div class="gaugeblock" id="current3" >
        <canvas id="canvas3"
         data-type="radial-gauge"
        data-value="0"
        data-width="200"
        data-height="200"
        data-bar-width="10"
        data-bar-shadow="5"
        data-color-bar-progress="rgba(50,200,50,.75)">
        </canvas>
        <div id="time3"></div>
        </div>
        </div>
				<div class="col-md-6">
          <div class="gaugeblock" id="current4">
          <canvas id="canvas4"
           data-type="radial-gauge"
          data-value="0"
          data-width="200"
          data-height="200"
          data-bar-width="10"
          data-bar-shadow="5"
          data-color-bar-progress="rgba(50,200,50,.75)">
          </canvas>
          <div id="time4"></div>
          </div>
			</div>
		</div>
    <div class="row">
      <div class="col-md-12">
        <canvas id="graph1">

        </canvas>



      </div>
    </div>
  <div class="row">
      <div class="col-md-12">
        <canvas id="graph2">
        </canvas>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <canvas id="graph3">
        </canvas>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <canvas id="graph4">
        </canvas>
      </div>
    </div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/scripts.js"></script> -->
    <script async src="js/canv-gauge-master/gauge.min.js"></script>
    <script src="js/display_last.js"></script>
    <script src="js/jschart/Chart.bundle.js"></script>
    <script src="js/jschart/utils.js"></script>
    <script src="js/chartscript.js"></script>

  </body>
</html>
