<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>YESWEEKEND/LOTTERIE</title>
        <meta name="description" content="Obama's life">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
				<style type="text/css">a:link{text-decoration:none}</style>

	</head>
	<body>
		<div class="container">

			<?php
				include("header.php")
			?>

			<div class="row weekend">
				<div class="col-sm-offset-1 col-sm-2">
					<img src="img/noun_148918_cc copie.png" height="80px" class="pull-right">
				</div>

				<div class="col-sm-6" >
					<h1 class="text-center">Win your weekend with Obama !</h1>
				</div>
				<div class="col-sm-2">
					<img src="img/noun_148919_cc.png" height="80px" class="pull-left">
				</div>
			</div>
			<form class="form-horizontal">
				<fieldset class="row">

					<!-- Text input-->
					<div class="form-group">
  						<label class="col-md-4 control-label" for=""></label>
  						<div class="col-md-4">
  						<input id="" name="" type="text" placeholder="Your name" class="form-control input-lg">
  						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
  						<label class="col-md-4 control-label" for=""></label>
  						<div class="col-md-4">
  						<input id="" name="" type="text" placeholder="Your mail" class="form-control input-lg">
  						</div>
					</div>

					<!-- Multiple Checkboxes -->
					<div class="form-group">
  						<label class="col-md-2 control-label" for=""></label>
  						<div class="col-md-8">
  							<div class="checkbox">
    							<label for="-0">
      							<input class="center-block" type="checkbox" name="" id="-0" value="1">
      							<p class="text1 text-center">I certify not to be a terrorist, I do not plan an attack against the United States of America and have no connection with any terrorist organization. If not click <a href="https://www.nsa.gov">here</a></p>
    					</label>
							</div>
  						</div>
					</div>

					<!-- Button -->

					<div class="form-group">
  						<label class="col-md-5 control-label" for=""></label>
							<a href="joke.php" class="btn btn-success input-lg col-md-2 " role="button">Join the lottery</a>
					</div>

				</fieldset>
			</form>

			<?php
				include("footer.php")
			?>

		</div>



	</body>
</html>
