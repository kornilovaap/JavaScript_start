<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Анна Корнилова">
    <meta name="description" content="Загадки">
    <meta name="keywords" content="личный сайт, загадки, валюта, html">
    <title>Kornilova.IT</title>
    <link rel="shortcut icon" href="icon.jpg" type="image/x-icon">
    <link href="style.css?<?php echo date('YmdHis');?>" type="text/css" rel="stylesheet" />

		<script type="text/javascript">

			
			var score = 0;

			function write(text){ /*заменяет текст, исп вместо алёрта*/
				document.getElementById("info").innerHTML = text;
			}


			function hide(id){ /*функция для скрытия элемента со страницы*/
				document.getElementById(id).style.display = "none";
			}


			function checkAnswer(inputId, answers){
				var userAnswer = document.getElementById(inputId).value;
				userAnswer = userAnswer.toLowerCase();
				for(var i = 0; i < answers.length; i++){
					if(userAnswer == answers[i]){
						score++;
						break;
					}
				}
			}
			
			function checkAnswers() {

				checkAnswer("userAnswer1", ["сон", "сноведение"]);
				checkAnswer("userAnswer2", ["все", "12", "двенадцать"]);
				checkAnswer("userAnswer3", ["шахматный", "мертвый"]);

				write("Вы отгадали " + score + " загадок.");

				hide("button");
				hide("one");
				hide("two");
				hide("three");
				hide("userAnswer1");
				hide("userAnswer2");
				hide("userAnswer3");
				
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

			<h1>Игра в загадки</h1>

				<div class="box">

					<h3 id="info">Отгадай загадки!</h3>


					<p id="one">Что можно увидеть с закрытыми глазами?</p>
					<input type="text" id="userAnswer1" placeholder="ваш ответ...">

					<p id="two">Сколько месяцев в году имеют 28 дней?</p>
	                <input type="text" id="userAnswer2" placeholder="ваш ответ...">

					<p id="three">Какой конь не ест овса?</p>
					<input type="text" id="userAnswer3" placeholder="ваш ответ...">

					<br>
					<a href="#" onClick="checkAnswers();" id="button">Ответить</a>
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
    
