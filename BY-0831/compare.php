<?php
		session_start();
		$username = $_SESSION["username"];
		if ($username == NULL){
			header("Location:login.php?redir=compare.php"); //先登入最後送回目標頁面
		exit;
	}
	$tags = "<iframe width='560' height='315' src='https://www.youtube.com/embed/^^^^' frameborder='0'allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>林柏穎0831</title>
	</head>
	<body>
		<h2>林柏穎的0831練習網頁</h2>
		<hr>
		<?php include "menu.php"; ?>
		<hr>
		<h3>Youtuber對iphone11系列手機之比較</h3>
		<?php
		//開啟檔案作為讀取
		$fp= fopen("products.txt", "r") or die("Die!");
		//讀入所有的資料, 放入$data變數中
			$data = fread($fp, filesize("products.txt"));
		//關檔
		fclose($fp);
		//把讀取到的資料印出來
		//echo $data;
		$youtubers = explode("\n", $data); //explode用來以換列字元來拆解讀取到資料

		foreach ($youtubers as $youtuber) { //用一個迴圈把每一項目個別取出
			$temp = explode(",", $youtuber);//分割成兩個部分名稱說明($temp[0])及影片id($temp[1])
			$model = trim($temp[0]);//trim清除字串前後空白
			$vid = trim($temp[1]);
			echo $model . "<br>";
			echo str_replace("^^^^", $vid, $tags)."<br>";//此為影片id的取代轉換
		}
		?>




  </body>
  </html>





