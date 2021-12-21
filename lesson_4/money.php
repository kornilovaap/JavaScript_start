<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Анна Корнилова">
    <title>Kornilova.IT</title>
    <link rel="shortcut icon" href="icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
	<script type="text/javascript">

		function write(text)
		{
			document.getElementById("result").innerHTML = text;
		}

		function converter()
		{
			//Ввод суммы в рублях
			var rubles = document.getElementById("userAnswer").value;
			rubles = parseInt(rubles);
			//Курс доллара и евро по отношению к рублю!
			var euroRate = document.getElementById("eurutm").innerHTML;
			euroRate = parseInt(euroRate);
			var dollarRate = document.getElementById("usrutm").innerHTML;
			dollarRate = parseInt(dollarRate);

			//Подсчёт валют
			var resultEuro = (rubles / euroRate);
			var resultDollar = (rubles / dollarRate);

			//Вывод результата
			//Команда toFixed ограничивает значение после запятой (2) двумя последними цифрами
			write(rubles + " рублей = " + resultDollar.toFixed(2) + " долларов <br>" + rubles + " рублей = " + resultEuro.toFixed(2) + " евро");
		}

	</script>
</head>
<body>
<div class="contentWrap">
	<div class="content">
		
	<?php
    	include "menu.php";
	?>
			<div class="currency_table">
				<table width="220" border="0" style="border-collapse: collapse; text-align:left; font-size:11px; color: rgb(40, 41, 35); "><tr bgcolor=""><td height="10" valign="top" colspan="3">
                                <style>A.forexpf_ { text-decoration: none;} A.forexpf_:visited {color: rgb(40, 41, 35);} </style>
                                <a href="http://www.profinance.ru/" title="Курсы валют ЦБ РФ" target="_blank" class="forexpf_">КУРСЫ ВАЛЮТ ЦБ РОССИИ</a></td></tr>
                                <tr bgcolor=""><td>Дата:</td><td id="pfdt1">00:00</td><td id="pfdt2">00:00</td>
                                </tr><tr bgcolor=""><td><a href="http://www.profinance.ru/currency_usd.asp" title="Курс доллара" target="_blank" class="forexpf_">Курс доллара</a></td>
                                <td id="usrutd">0.00</td><td id="usrutm">0.00</td></tr>
                                <tr bgcolor=""><td><a href="http://www.profinance.ru/currency_eur.asp" title="Курс Евро" target="_blank" class="forexpf_">Курс евро</a></td>
                                <td id="eurutd">0.00</td><td id="eurutm">0.00</td></tr></table><script src="http://informers.forexpf.ru/php/cbrf.php?id=01"></script>
			</div>


		<h1>Конвертер валют</h1>

		<div class="box">
			<p id="#">Введите сумму в рублях</p>
			<p></p>
			<input type="text" id="userAnswer">
			<h3 id="result"></h3>
			<br>
			<a href="#" onclick="converter();"id="#">Конвертировать</a>
		</div>
	</div>
</div>
<?php 
        include "footer.php"
?>
</body>
</html>    
      
