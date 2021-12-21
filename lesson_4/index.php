<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Анна Корнилова">
    <meta name="description" content="Главная страница">
    <title>Kornilova.IT</title>
    <link rel="shortcut icon" href="icon.jpg" type="image/x-icon">
    <link href="style.css?<?php echo date('YmdHis');?>" type="text/css" rel="stylesheet" />
</head>
<body>

<div class="content">

<?php
	include "menu.php";
?>

	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
	<img src="iam.jpg" alt="Мое фото" title="Всем привет !">
		<div class="box_text">
			<p><b>Здравствуйте.</b> Меня зовут <i>Анна Корнилова.</i> Я совсем недавно начала программировать, но уже написала свой первый сайт.</p>

			<p>В этом мне помог IT-портал <a href="https://geekbrains.ru/" target="_blank">GeekBrains</a></p>

			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написала: <br>
				<ul>
					<li><a href="puzzle.php">Загадки</a></li>
					<li><a href="guess.php">Угадайка</a></li>
					<li><a href="guess-2.php">Угадайка для двоих</a></li>
					<li><a href="generate.php">Генератор паролей</a></li>
					<li><a href="money.php">Конвертер валют</a></li>
				</ul>
			</p>
		</div>
	</div>
</div>

	<?php 
		include "footer.php"
	?>	


</body>
</html>
   
