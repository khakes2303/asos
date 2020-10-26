

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="col-8 mx-auto">
		<form action="insert.php" method="GET">
			<div class="mt-3">
				<span class="font-weight-bold">Название</span>
				<input type="" name="title" class="form-control">
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">Описание:</span>
				<input type="" name="descr" class="form-control">
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">Изображение:</span>
				<input type="" name="img" class="form-control">
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">Цена:</span>
				<input type="" name="price" class="form-control">
			</div>

			<button class="btn btn-success mt-5">Добавить</button>
		</form>
	</div>
</body>
</html>

<?php 

	$con = mysqli_connect("127.0.0.1", "root", "root", "project");

	
	
	
	
	/*

	HERON PRESTON
Джемпер с высоким воротником от Heron Preston. Заплатка с логотипом спереди, круглый вырез, длинные рукава и прямой подол. Цвет: черный

OFF-WHITE
футболка Caravaggio с принтом Живописный принт, круглый вырез и короткие рукава. Цвет: черный.
	
	adidas YEEZY
кроссовки Yeezy Boost 700 OG Wave Runner Кроссовки Yeezy Boost 700 OG Wave Runner от adidas (Адидас). Цвет: разноцветный.

Nike Air Force 1 07 LV8 Misplaced Swoosh
Материал: Верх - кожа, искусственная кожа; Подкладка - текстиль; Низ - резина Страна-производитель: Вьетнам

	*/
 ?>

