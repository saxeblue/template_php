<?php
	$page_key='index';
	require('function.php');
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
<?php include(PATH.'include/head.php'); ?>
  </head>

	<body id="<?php echo($page_key); ?>">
<?php include(PATH.'include/loader.php'); ?>
<?php include(PATH.'include/header.php'); ?>

		<div id="root">
			

<?php include(PATH.'include/footer.php'); ?>
		</div>
		
<?php include(PATH.'include/script.php'); ?>		
	</body>
</html>