<?php
		session_start();
		$username = $_SESSION["username"];
		if ($username == NULL){
			header("Location:login.php?redir=compare.php"); //先登入最後送回目標頁面
		exit;
    }
    //取得來自於表單的下拉式選單
    $target = $_POST["target"];
    if ($target==NULL) 
    {
    $target_model="三星手機介紹";
    $target_vid="vApuy2FLBag";
    }else{
        //找到之項目先分割字串 [0]標題[1]影片ID
        $targets = explode("," , $target);
        $target_model = $targets[0];
        $target_vid = $targets[1];
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
		<h3>Youtuber對iphone11系列手機之比較(老師教學)</h3>
		<?php
		$fp= fopen("products.txt", "r") or die("Die!");
			$data = fread($fp, filesize("products.txt"));
		fclose($fp);
		$youtubers = explode("\n", $data); 
        //以下用一個迴圈來製作影片選擇表單
        echo "<form method=POST action='compare03T.php'>";
        echo "<select name=target>";
        foreach ($youtubers as $youtuber) { 
            $temp = explode(",", $youtuber);
            $model = trim($temp[0]);
            $vid = trim($temp[1]); 
            $send_target= $model.",".$vid;
            echo "<option value='$send_target'>";        
            echo $model;
            echo "</option>";
        }
        
        echo "</select>";
        echo "<input type = submit>";
        echo "</form>";
        echo "<h3>目前播放的是".$target_model."的影片</h3>";
        echo str_replace("^^^^", $target_vid, $tags);
        echo "<br>";

        /*
		foreach ($youtubers as $youtuber) { //用一個迴圈把每一項目個別取出
			$temp = explode(",", $youtuber);//分割成兩個部分名稱說明($temp[0])及影片id($temp[1])
			$model = trim($temp[0]);//trim清除字串前後空白 //影片名稱
			$vid = trim($temp[1]); //影片ID
			echo $model . "<br>";
			echo str_replace("^^^^", $vid, $tags)."<br>";//此為影片id的取代轉換
            }*/
		?>




  </body>
  </html>





