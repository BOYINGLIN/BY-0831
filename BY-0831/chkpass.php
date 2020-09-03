<?php //此僅為檢查用，不用設計html的網頁，並用條件設定轉址相對應的畫面
	session_start();
	$redir = $_POST["redir"];
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	
	if ($password == "1234"){
		//成功登入要處理的程式碼.
		//SESSION就好像是在共同公佈欄用KEY==> Value的方式加註資料
		//SESSION["key:username"]<==Value: $usename(來自於表單)
		$_SESSION["username"]= $username;
		$_SESSION["email"]= $email;

		//$redir是來自於lotto.php?redir=xxx.php的參數
		//它的目的是指引在表單完成之後，要前往的目標網址
		if($redir !=NULL){
			header("Location: $redir");
		} else{
		header("Location: index.php");//轉址標頭
		}exit;//宣告整個程式完成，避免繼續向後搜尋
	}else{
		//登入失敗要處理的程式碼
		echo "你的密碼輸入錯誤!<br>";
		echo "<a href = 'login.php'>回上一頁重新輸入</a>";
	}

	
?>