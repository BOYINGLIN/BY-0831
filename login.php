<?php
 $redir = $_GET["redir"];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> 林柏穎0831</title>
	</head>
	<body>
		<h2>登入我的網站</h2>
		<hr>
		<?php include "menu.php"; ?>
		<hr>
		
			
		
		<form method="post" action="chkpass.php"> 
			<table width=400 border=0> 
			
			<input type="hidden" name="redir" value = <?php echo $redir; ?>
			<tr><td>帳號:</td><td><input type="text" name="username"></td></tr>
			<tr><td>電子郵件:</td><td><input type="text" name="email"></td></tr>
			<tr><td>密碼:</td><td><input type="password" name="password"></td></tr>
			<tr><td align=center colspan=2><input type="submit" size=9 value="登入"></td></tr>
			</table>
			
		</form>
		
		<?php
		echo "<hr>";
		include "footer.php";
		?>

	</body>

</html>



