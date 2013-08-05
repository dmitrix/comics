<?php
  //A webcomic template made by Marcel Baarsch. | Dmitrix.com

	//To post a new comic, copy this into a new folder named '$current' along with your image.
	//Name this file 'index.php' and name your image '$current.png'
	require '../last.inc.php'; //update as you go, increase $last everytime you post.
	$current = 1; //Which number in your series is this comic?
	$title = ''; //For hover over text.
?>
<html>
	<head>
		<title>Comics!</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	
	<body>
		<h1>Web Comics!</h1>
		
		<center>
			
			<form action="../1/index.php" method="LINK">
				<input type="submit" value="|<">
			</form>
	
			<?php
				if($current == 1){
					echo '<form action="../'.($current).'/index.php" method="LINK">';
					echo '<input type="submit" name="previous" value="prev">';
					echo '</form>';
				}else{
					echo '<form action="../'.($current-1).'/index.php" method="LINK">';
					echo '<input type="submit" name="previous" value="prev">';
					echo '</form>';
				}
			?>
		
			<form action="../<?php echo rand(1,$last); ?>/index.php" method="LINK">
				<input type="submit" name="random" value="rand">
			</form>
		
			<?php 
				if($current == $last){
					echo '<form action="../'.($current).'/index.php" method="LINK">';
					echo '<input type="submit" name="next" value="next">';
					echo '</form>';
				}else{
					echo '<form action="../'.($current+1).'/index.php" method="LINK">';
					echo '<input type="submit" name="next" value="next">';
					echo '</form>';
				}
			?>
			
			<form action="../<?php echo $last; ?>/index.php" method="LINK">
				<input type="submit" value=">|">
			</form>
		</center>
		
		<img src="<?php echo $current.'.png'; ?>" title="<?php echo $title; ?>">
		
		<div id="footer">Created by Marcel Baarsch (DMITRIX) | &copy; 2013</div>
	</body>
</html>
