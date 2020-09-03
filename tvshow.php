<?php
		session_start();
		$username = $_SESSION["username"];
		if ($username == NULL){
			header("Location:login.php?redir=tvshow.php"); //先登入最後送回目標頁面
		exit;
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>線上直播新聞選台</title>

	</head>
	<body bgcolor=#F2DA8E>
<h2>林柏穎的0831練習網頁</h2>
<hr>
<?php include "menu.php"; ?>
<hr>
<h3>精選Youtube第四台直播新聞</h3>
<hr>		


<?php
	
	$tags = "<iframe width='672' height='378' src='https://www.youtube.com/embed/^^^^' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>"; 
	//影片嵌入碼原有之雙引號需轉換成單引號，但前後仍為雙引號包裝並用分號結尾
	//^^^^取代原有影片特有碼作為更換

   $tv0 = array("01頻道 TVBS新聞直播", "TVBS新聞", "A4FbB8UhNRs");
   $tv1 = array("02頻道 民視新聞直播", "民視新聞", "XxJKnDLYZz4");
   $tv2 = array("03頻道 華視新聞HD直播", "華視新聞", "TL8mmew3jb8");
   $tv3 = array("04頻道 EBC 東森新聞直播", "東森新聞","RaIJ767Bj_M");
   $tv4 = array("05頻道 台視新聞台直播","台視新聞", "NbjI0cARzjQ");
   $tv5 = array("06頻道 中視新聞台", "中視新聞", "wxQcIb8zcPA");
   $tv6 = array("07頻道 三立LIVE新聞HD直播", "三立新聞", "4ZVUmEUFwaY");

   $data = array($tv0, $tv1, $tv2, $tv3, $tv4, $tv5, $tv6); //二維陣列的概念

    //以下迴圈負責產生按鈕
    foreach($data as $tv){
    	echo "<button>" .
    	"<a href= 'tvshow.php?v=". $tv[2]. "&title=". $tv[0] . "'>"."<h3>".$tv[1]."<h3>"."</a></button>"; //用中括號選取所需之內容
		}	
			echo "<hr>";
	//以下要用來處理影片的撥放器，嵌入的網址也要跟著修正		
			$v = $_GET["v"]; //從網址取得v
			$title = $_GET["title"]; //從網址取得title
			
			if ($v==Null) {
				$v="A4FbB8UhNRs";
				$title=	"01頻道 TVBS新聞直播";
			}
			
			echo "<h2>$title<h2>";
			echo str_replace("^^^^", "$v", $tags); //置換原有鑲嵌的條碼


?>
<hr>
--版權並無所有，歡迎自行取用--
<hr>
</body>

