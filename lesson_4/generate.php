<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Анна Корнилова">
    <title>Kornilova.IT</title>
    <link rel="shortcut icon" href="icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

    <script type="text/javascript">

        function readInt(id) {
            var number = document.getElementById(id).value;
            return parseInt(number);
        }

        function write(text) {
            document.getElementById("info").innerHTML = text;
        }


        function hide(id){ /*функция для скрытия элемента со страницы*/
            document.getElementById(id).style.display = "none";
        }


        function passwordGen() {
            var userData = readInt("input");
            var newPassword = "";
            var chars = "1234567890AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz";
            for (var i = 0; i < userData; i++) {
                newPassword += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            if (isNaN(userData) || userData <= 0) {
                write("Некорректное число.\nВведите положительное число.");
            } else {
                hide("button")
                hide("input")
                write("Ваш пароль: " + newPassword);
            }
        }

    </script>
</head>

<body>

<div class="content">
 
<?php
    include "menu.php";
?>

        <div class="content">
            <div class="center">
                <h1>Генератор паролей</h1>
                <div class="box">
                    <p id="info">Введите желаемую длину для пароля:<br></p>
                    <input type="text" id="input" placeholder="цифрами">
                    <br>
                    <a href="#" onClick="passwordGen();" id="button">Сгенерировать пароль</a>
                </div>
            </div>
        </div>
    
    <?php 
        include "footer.php"
    ?>

</body>

</html>