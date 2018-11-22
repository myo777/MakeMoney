<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Make Money</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="makemoney.css">
</head>
<style>
    body {
        width: 100%;
        height: 100%;
        padding: 5px;
        margin: 5px;
    }
    
    #frame {
	height: 200px;
	overflow: auto;
	border: 1px solid black;
	width: 100%;
	color: darkgreen;
}

#frame #red {
	color: red !important;
}


.farm, .cave, .house, .casino {
	height: 170px;
	width: 200px;
	margin-left: 10px;
	margin-top: 100px;
	margin-bottom: 50px;
	border: 1px solid black;
	text-align: center;
}
</style>
<body>
	<div class="container">
		<div class="header">
			<h1>Make Money</h1>
		</div>
		<br>
		<br>


		<?php

		if (!isset($_SESSION['gold'])) {
			$_SESSION['gold'] = 0;
			$_SESSION['status'] = array();
		}

		?>
		<div class = "gold_button">
		    <h2>Your gold: <input readonly type ="number" width="100px" value ="<?php echo $_SESSION['gold']; ?>"></h2>
		</div>

		<div class="row content">

			<div class="col-sm-2"></div>			

			<div class="farm col-sm-2">
				<h2>Farm</h2>
				<p>(earns 10-20 golds)</p>
				<form action="process2.php" method="post">
					<input type="hidden" name="location" value="farm">
					<input type="submit" name="findgold" value="Find Gold!">
				</form>
			</div>

			<div class="cave col-sm-2">
				<h2>Cave</h2>
				<p>(earns 5-10 golds)</p>
				<form action="process2.php" method="post">
					<input type="hidden" name="location" value="cave">
					<input type="submit" name="findgold" value="Find Gold!">
				</form>
			</div>

			<div class="house col-sm-2">
				<h2>House</h2>
				<p>(earns 2-5 golds)</p>
				<form action="process2.php" method="post">
					<input type="hidden" name="location" value="house">
					<input type="submit" name="findgold" value="Find Gold!">
				</form>
			</div>

			<div class="casino col-sm-2">
				<h2>Casino</h2>
				<p>(earns/takes 0-50 golds)</p>
				<form action="process2.php" method="post">
					<input type="hidden" name="location" value="casino">
					<input type="submit" name="findgold" value="Find Gold!">
				</form>
			</div>

		</div>

		<div class="activities">
			<h3>Activities:</h3>
				<?php 
				echo "<div id='frame'>";
				foreach ($_SESSION['status'] as $status) {
					echo $status;
				}
				echo "</div>";
				
				?> 
			
		</div>

		<div>
			<form action="process2.php" method="post">
				<input type="hidden" name="form" value="playaagain">
				<input type="submit" value="Play Again">
			</form>
		</div>
	</div> <!-- End of div class = container -->
</body>

</html>