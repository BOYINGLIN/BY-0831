<?php 
		session_start();
		$username = $_SESSION["username"];
?>
		<a href="index.php">首頁</a> 
		<?php if ($username == NULL){ ?>
		<a href="login.php">登入</a>		
		<?php } else { ?>
		<a href="logout.php">登出</a>
		<?php } ?>