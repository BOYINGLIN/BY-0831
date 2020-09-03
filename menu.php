<?php 
		session_start();
		$username = $_SESSION["username"]; //menu01為粗糙版本
		$link_homepage = "<a href='index.php'>首頁</a>";
		$link_login =  "<a href='login.php'>登入</a>";
		$link_lotto = "<a href ='lotto.php'>大樂透預測</a>";
		$link_tvshow = "<a href ='tvshow.php'>電視選台器</a>";
		$link_compare = "<a href ='compare.php'>產品比較</a>";
		$link_compare02hw = "<a href ='compare02hw.php'>產品比較(下拉選單)</a>";
		$link_compare03T = "<a href ='compare03T.php'>產品比較(老師)</a>";
		$link_logout= "<a href='logout.php'>登出</a>";
		if ($username == NULL){
			echo "<table text-align:center;>";
			echo "<tr><td>";
			echo $link_homepage."</td><td>";
			echo $link_login."</td></tr>";
			echo "</table>";
			//訪客專區
		}else {
			//會員專區
			echo "<table width=80%;text-align:center;>";
			echo "<tr><td>";
			echo $link_homepage."</td><td>";
			echo $link_lotto."</td><td>";
			echo $link_tvshow."</td><td>";
			echo $link_compare."</td><td>";
			echo $link_compare02hw."</td><td>";
			echo $link_compare03T."</td><td>";
			echo $link_logout."</td></tr>";
			echo "</table>";
			

		}
			
?>