<?php
	//開啟檔案作為讀取
  $fp = fopen("counter.txt", "r") or die("Unable to open the file");//開啟檔案後計算，若無法開啟則會先傳訊息
  //讀取當前的檔案內容,也就是目前的人次
  $counter = fread($fp, filesize("counter.txt"));
  //關檔, $fp是檔案指標,可以自行命名,...
  fclose($fp);

  echo "本網站參觀人次:";
  echo $counter;
  echo "人次";
  $counter ++;//把目前的數字內容加1
  $fp = fopen("counter.txt", "w") or die("Unable to open the file");
  //把$counter變數的內容, 以文字檔的型式儲存到檔案中
  fwrite($fp, $counter);
  //關檔
  fclose($fp);
  echo "<br>";
    
?>
<center>
<a href="https://info.flagcounter.com/4BIW"><img src="https://s05.flagcounter.com/countxl/4BIW/bg_FFFFFF/txt_020112/border_FAF3E8/columns_2/maxflags_6/viewers_0/labels_1/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
</center>
