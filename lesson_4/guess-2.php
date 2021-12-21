<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Анна Корнилова">
    <title>Kornilova.IT</title>
    <link rel="shortcut icon" href="icon.jpg" type="image/x-icon">
    <link href="style.css?<?php echo date('YmdHis');?>" type="text/css" rel="stylesheet" />

	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100); /*генерация случайного числа*/
		var playerNumber = 1;

		function readInt(){ /* считывает число из текстового поля, пришла на замену промпт*/
			var number = document.getElementById("userAnswer").value;
			return parseInt(number);
		}

		function write(text){ /*заменяет текст, исп вместо алёрта*/
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){ /*функция для скрытия элемента со страницы*/
			document.getElementById(id).style.display = "none";
		}

		function changePlayer(){
			if(playerNumber == 1)
				playerNumber =2;
			else
				playerNumber = 1;
		}

		function guess(){
			
			var userAnswer = readInt(); /*присваиваем значение, кот пользователь ввел в поле*/
			if(userAnswer == answer){
				write("<b>Поздравляю, выиграл икрок № </b>" + playerNumber);
				hide("button");
				hide("userAnswer");
			} else if(userAnswer > answer){
				changePlayer();
				write("Вы ввели слишком большое число.<br>Ходит игрок № " + playerNumber +" <br>Введите число от 1 до 100.<br>");
			} else if(userAnswer < answer){
				changePlayer();
				write("Вы ввели слишком маленькое число.<br>Ходит игрок № " + playerNumber +" <br>Введите число от 1 до 100.<br>");				
			}
		}

	</script>
</head>
<body>

<div class="content">
	
<?php
	include "menu.php";
?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Угадайка для двоих</h1>

			<div class="box">
				<h3>
					<p id="info">Добро пожаловать в игру угадай число! В игре участвуют два игрока.<br>Игроки по очереди угадывают число от 0 до 100, загаданное компьютером.<br><i>Количество попыток не ограничено.</i><br>Удачи!<br>Начинает игрок под номером 1.</p>
				</h3>
		
				<input type="text" id="userAnswer" placeholder="ваш ответ..."><br>

				<a href="#" onClick="guess();" id="button">Проверить</a>				
			</div>

        </div>
    </div>
</div>
</div>

	<?php 
		include "footer.php"
	?>


</body>
</html>
