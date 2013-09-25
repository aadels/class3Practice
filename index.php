
<!DOCTYPE HTML>
<html>

<head>
	<style type='text/css'>
		body {
     		background-color: <?php echo $background_color; ?>
		}

		img.displayed {
    		display: block;
    		margin-left: auto;
    		margin-right: auto 
		}

		p {
			text-align:center
		}
	</style>
	<?php
		require_once('logic.php');
	?>
</head>

<body>
	<h1>Week 3 Exercise: Day/Night</h1> 
	<img class="displayed" src='images/<?=$image?>'>
	<p>The time is:  <?=$time?></p>	

	
</body>
</html>