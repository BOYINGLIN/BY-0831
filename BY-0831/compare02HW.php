<?php
		session_start();
		$username = $_SESSION["username"];
		if ($username == NULL){
			header("Location:login.php?redir=compare02hw.php"); //先登入最後送回目標頁面
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
			//echo $model . "<br>";
		?>
		<form method="POST" action="compare02hw.php">
  			<label for="youtubers">Choose a youtuber:</label>
  			<select name="youtuber">
		<?php
		$fp= fopen("products.txt", "r") or die("Die!");
		//讀入所有的資料, 放入$data變數中
			$data = fread($fp, filesize("products.txt"));
				
		//關檔
		fclose($fp);
		//把讀取到的資料印出來
		//echo $data;
		$youtubers = explode("\n", $data); //explode用來以換列字元來拆解讀取到資料
	
		for($i=0; $i<count($youtubers); $i++){
				$name = $youtubers[$i];
				$temp =  explode(",",$name);
				$model = trim($temp[0]);
				$vid = trim($temp[1]);
			echo "<option value=" . $i . ">" . $model. "</option>";

			}
		

?>
   			 
 		 </select>
 		 <input type="submit" value="播放">
		</form>


		<?php
		$name = $_POST["youtuber"];
		$name = $youtubers[$name];
		$temp =  explode(",",$name);//分割成兩個部分名稱說明($temp[0])及影片id($temp[1])
		$model = trim($temp[0]);//trim清除字串前後空白
		$vid = trim($temp[1]);


		echo"<h3 style='color:#aaaa00;'>此為" .$model."的youtube頻道</h3><br>";
		 //找到youtuber的名 如何到表單找id位置!!!
		echo str_replace("^^^^", $vid, $tags)."<br>";//此為影片id的取代轉換}
		?>


  </body>
  </html>





