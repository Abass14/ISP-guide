<?php 

	require_once "templates/head.php";
	
	session_start();
	


 ?>
<body>
	
	<?php require_once "templates/menu.php" ?>

	<div class="container" id="main">
		<div class="row">
			<div class="center-div col-md-6 col-sm-12 border mt-4 px-5">
				<h2 class="text-center py-3">Select VIN Label</h2>
				<form class="form-group" method="POST" action="vinid-process.php">
					<div class="row">
						<div class="col-sm-3 col-md-3 col-sm-12">
							<label>
								VIN Label
							</label>
						</div>
						<div class="col-sm-9 col-md-9 col-sm-12">
							<select name="vin" class="form-control">
								<option>Select--</option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="E">E</option>
								<option value="F">F</option>
								<option value="G">G</option>
								<option value="H">H</option>
								<option value="I">I</option>
								<option value="J">J</option>
								<option value="K">K</option>
								<option value="L">L</option>
								<option value="M">M</option>
								<option value="N">N</option>
								<option value="O">O</option>
								<option value="P">P</option>
								<option value="Q">Q</option>
								<option value="R">R</option>
								<option value="S">S</option>
								<option value="T">T</option>
								<option value="U">U</option>
								<option value="V">V</option>
								<option value="W">W</option>
								<option value="X">X</option>
								<option value="Y">Y</option>
								<option value="Z">Z</option>
							</select>
						</div>
					</div>
					<!-- <div class="row">
						<div class="col-sm-3 col-md-3 col-sm-12">
							
						</div>
						<div class="col-sm-9 col-md-9 col-sm-12">
							
						</div>
					</div> -->
					<div class="row">
						<div class="col-sm-3 center-block m-auto py-4">
							<input type="submit" name="submit" class="btn btn-primary" value="Submit">
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-12 center-div">
				<?php
					if (isset($_SESSION['ms']) && $_SESSION['ms']) {
						
						echo $_SESSION['ms'];
						unset($_SESSION['ms']);
					}elseif (isset($_SESSION['error']) && $_SESSION['error']) {
						echo $_SESSION['error'];
						unset($_SESSION['error']);
					}
				?>
			</div>
		</div>
	</div>

	



</body>
	<?php require_once "templates/footer-sec.php" ?>
</html>