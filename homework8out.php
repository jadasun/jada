<?php
  
include ("secret.php");

        session_start();

	$a = $_POST["a"];
	$password = $_POST["password"];
        
        $clive = "SELECT * FROM crouse WHERE crouse.a='$a' AND crouse.password='$password'";   //取得crouse資料表中的a和password欄位

	$result = mysql_query($clive, $link);        //送出查詢，並將查詢的結果_$clive,放入$result變數中
	$record = mysql_num_rows($result);           //查詢結果的記錄筆數(rows)
        
        mysql_close($link);

   $_SESSION["a"] = $_POST["a"];                //本行重要,仍需透過傳遞才能正確在網頁間使用SESSION
#  $_SESSION["password"] = $_POST["password"];


#   echo '$record'.'='.$record;   //測試程式用!  變數以兩個單引號' '框住才能呈現

	if (empty($record)){                         //設定倘若空值跳出
            header("location:homework8err.php");
}
  else {                                             //否則轉入登入成功網頁
     header("location:homework8sucesslogin.php");
  exit;
}

?>

