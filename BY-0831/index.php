<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> 林柏穎0831</title>
	</head>
	<body>
		<h2>林柏穎的0831練習網頁</h2>
		<hr>
		<?php include "menu.php"; ?>
		<hr>

		<?php		 
		$username = $_SESSION["username"];
		$email = $_SESSION["email"];
		//檢查$username的內容已決定瀏覽者的身分
		if ($username!=NULL){
			echo
			"我的個人資訊". "<br>".
			"你的帳號:".$username. "<br>".
			"電子郵件:". $email. "<br>";
		}else{
			echo "歡迎親愛的訪客，請登入以檢視更多的訊息!<br>";
		}	
		?>
		<h4>會員專區</h4><br> 
		<button type=button><a href="lotto.php"><h3>大樂透預測</h3></a></button>
		<button type=button><a href="tvshow.php"><h3>電視選台器</h3></a></button>
		<button type=button><a href="compare.php"><h3>產品比較</h3></a></button>
		<button type=button><a href="compare02hw.php"><h3>產品比較-下拉選單</h3></a></button>

		<?php
		echo "<hr>";
		include "footer.php";
		?>


	</body>

</html>
