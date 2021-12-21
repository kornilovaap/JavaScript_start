<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Анна Корнилова">
    <meta name="description" content="Анимация фонарик">
    <title>Kornilova.IT</title>
    <link rel="shortcut icon" href="icon.jpg" type="image/x-icon">
    <link href="style.css?<?php echo date('YmdHis');?>" type="text/css" rel="stylesheet" />
</head>
<body>
<div class="content">

	<?php
		include "menu.php";
	?>

	<main>
	<div class="lantern"></div>
	<div class="water"></div>
	</main>


	
	<script>
		var light = document.querySelector(".lantern");
		document.addEventListener("mousemove", function(e){
			var x = e.pageX;
			var y = e.pageY;
			light.style.background = "radial-gradient(circle at "+x+"px "+y+'px,transparent,#000 40%)';
			})
	
	</script>

</div>

	<?php 
		include "footer.php"
	?>	


</body>
</html>
        
