<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Анна Корнилова">
    <meta name="description" content="Загадки">
    <title>Kornilova.IT</title>
    <link rel="shortcut icon" href="icon.jpg" type="image/x-icon">
    <link href="style.css?<?php echo date('YmdHis');?>" type="text/css" rel="stylesheet" />

	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100); /*генерация случайного числа*/
		var tryCount = 0;
		var maxTryCount = 5;

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

		function guess(){
			tryCount++;

			var userAnswer = readInt(); /*присваиваем значение, кот пользователь ввел в поле*/
			if(userAnswer == answer){
				write("<b>Поздравляю, вы угадали!</b>");
				hide("button");
				hide("userAnswer");
			} else if(tryCount >= maxTryCount){
				write("Вы проиграли<br>Правильный ответ: " + answer);
				hide("button");
				hide("userAnswer");
			} else if(userAnswer > answer){
				write("Вы ввели слишком большое число.<br>Попробуйте еще раз. Введите число от 1 до 100.<br><em>Осталось попыток " + (maxTryCount - tryCount) + ".</em>");
			} else if(userAnswer < answer){
				write("Вы ввели слишком маленькое число.<br>Попробуйте еще раз. Введите число от 1 до 100.<br><em>Осталось попыток " + (maxTryCount - tryCount) + ".</em>");				
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

			<h1>Игра угадайка</h1>

			<div class="box">
				<h3>
					<p id="info">Угадайте число от 0 до 100.<br>
					<i>У вас 5 попыток.</i><br>
					Удачи!
					</p>
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
          
