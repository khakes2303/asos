<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

	<div class=" bg-dark col-12 mx-auto" style="height: 60px;">
		<div class="row">
			<div class=" col-10 mx-auto" style="height: 60px;">
				<div class="row">
					<div class="bg-dark col-1 pl-0 pr-0" style="height: 60px;">
						<img src="logo.png" class="w-100" style="height: 60px;">
					</div>
					<div class="bg-dark col-4" style="height: 60px;">
						<div class="row">
							<div class="col-5 pl-0 pr-0" style="height: 60px;">
								<h4 class="text-white mt-3" style="text-align: center;">ЖЕНСКОЕ</h4>
							</div>
							<div class="col-5" style="height: 60px;">
								<h4 class="text-white mt-3" style="text-align: center;">МУЖСКОЕ</h4>
							</div>
						</div>
					</div>
					<div class="bg-dark col-6" style="height: 60px;">
						<div class="row">
							<div class="col-9 pl-0" style="height: 60px;">
								<input type="" name="" class="mt-3 rounded-pill" style="width: 570px;">
							</div>
							<div class="col-1 pl-0 pr-0" style="height: 60px;">
								<img src="ikon1.png" class="w-100 mt-2" style="height: 40px;">
							</div>
							<div class="col-1 pl-0 pr-0" style="height: 60px;">
								<img src="ikon2.png" class="w-100 mt-2" style="height: 40px;">
							</div>
							<div class="col-1 pl-0 pr-0" style="height: 60px;">
								<img src="ikon3.png" class="w-100 mt-2" style="height: 40px;">
							</div>
						</div>
					</div>
					<div class="col-1 pl-0 pr-0" style="height: 60px;">
						<a href="admin.php">Админ-панель</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class=" col-12 mx-auto mt-3" style="height: 800px;">
		<div class="row">
			<div class=" col-10 mx-auto" style="height: 800px; background-image: url(bg.png); background-size: 100% 100%;">
				<h1 class="text-white font-weight-bold" style="margin-top: 250px; margin-left: 700px;">Это - ASOS</h1>
				<h5 class="text-white font-weight-light" style="margin-top: 20px; margin-left: 650px;">ASOS DESIGN и 850+ брендов</h5>
				<button style="height: 45px; width: 180px; margin-left: 575px;" class="font-weight-bold btn btn-light">ЖЕНСКОЕ</button>
				<button style="height: 45px; width: 180px; margin-left: 40px;" class="font-weight-bold btn btn-light">МУЖСКОЕ</button>
			</div>
		</div>
	</div>

	<div class=" col-10 mx-auto mt-3" style="height: 1300px;">
		<div class="row">
			<div class=" col-12 mx-auto" style="height: 600px;">
				<div class="row">
					<div class="bg-dark col-3 ml-3 mx-auto pr-0 pl-0" style="height: 600px;">
						<?php 
							$con = mysqli_connect("127.0.0.1", "root", "root", "project");
							$query = mysqli_query($con, "SELECT * FROM site");
							$stroka1= $query->fetch_assoc();
							$stroka2= $query->fetch_assoc();
							$stroka3= $query->fetch_assoc();
							$stroka4= $query->fetch_assoc();


						?>
						<img src="1.jpg" class="w-100" style="height: 400px;">
						<h2 class="font-weight-bold text-white" style="text-align: center;"><?php 
						echo $stroka1["title"] ?></h2>
						<h5 class="font-weight-light text-white" style="text-align: center;"><?php 
						echo $stroka1["descr"] ?></h5>
						<button class="ml-5">18 000 р</button>
					</div>
					<div class="bg-dark col-3 ml-3 mx-auto pr-0 pl-0" style="height: 600px;">
						<img src="logo2.jpg" class="w-100" style="height: 400px;">
						<h2 class="font-weight-bold text-white" style="text-align: center;">
							<?php 
								echo $stroka2["title"] ?>
						</h2>
						<h5 class="font-weight-light text-white" style="text-align: center;"><?php 
						echo $stroka2["descr"] ?></h5>
						<button class="ml-5">20 000 р</button>
					</div>
					<div class="bg-dark col-3 ml-3 mx-auto" style="height: 600px;">
						<img src="3.jpg" class="w-100" style="height: 400px;">
						<h2 class="font-weight-bold text-white" style="text-align: center;">
							<?php 
								echo $stroka3["title"] ?>
						</h2>
						<h5 class="font-weight-light text-white" style="text-align: center;">
							<?php 
								echo $stroka3["descr"] ?>
						</h5>
						<button class="ml-5">20 000 р</button>
					</div>
				</div>
			</div>
			<div class="col-12 mx-auto mt-3" style="height: 600px;">
				<div class="row">
					<div class="bg-dark col-3 ml-3 mx-auto" style="height: 600px;">
						<img src="<?php 
							echo $stroka4["img"];
						?>" class="w-100" style="height: 400px;">
						
						<h2 class="font-weight-bold text-white" style="text-align: center;">
							<?php 
								echo $stroka4["title"] ?>
						</h2>
						<h5 class="font-weight-light text-white" style="text-align: center;">
							<?php 
								echo $stroka4["descr"] ?>
						</h5>
						<button class="ml-5">
							<?php 
								echo $stroka4["price"] ?>
						</button>
					</div>
					<div class="bg-dark col-3 ml-3 mx-auto" style="height: 600px;">
						
					</div> 
					<div class="bg-dark col-3 ml-3 mx-auto" style="height: 600px;">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>