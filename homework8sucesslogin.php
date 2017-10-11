<?
    session_start();
  
    if($_SESSION["a"]=="crouse"){
           
          echo "現在您的權限是: 管理者";
          
}

else{
      
      header("Location:homework8hack.php");    //您沒有正確的權限
}


# echo '$_SESSION["a"]'.'='.$_SESSION["a"]; echo "<p>";  //測試程式用!  變數以兩個單引號' '框住才能呈現
# echo '$_POST["a"]'.'='.$_POST["a"]; echo "<p>"; 
# echo '$a'.'='.$a; echo "<p>";

?>
<html>
<body>

<title>以帳號.密碼登入資料庫
</title>

<td>
<center><img src="http://www.lses.tyc.edu.tw/classweb/UploadPhoto/42582_.jpg"  width="auto" height="220px">孫老師歡迎您!<p>
<?
echo "";
echo '今天的日期與時間是：'.$today = date("T Y M j D G:i");echo"<p>";
echo "SQL資料庫連結成功,帳號是cr****!";echo"<p>";
echo "PHP版本是:";
echo PHP_VERSION; echo"<p>";
echo "平台是:";
echo "$_SERVER[SERVER_SOFTWARE]<br>";  echo"<p>";
?>
<center>
<font color="#ff3333" style=font-size:30px font face=�з��� style=FILTER:Shadow(Color=a865ff&#44;direction=150);height=2 STYLE=BACKGROUND:URL(http://163.30.34.253/~test4/clive007007007/image/0106.gif)>
<font size=5>
<MARQUEE direction=up behavior=alternate width=300 height=90><br>
<MARQUEE direction=right behavior=alternate>哇! 恭喜!終於成功了!
</FONT>
</MARQUEE>
</MARQUEE>
</CENTER>
</font></font></font></b>
<font face="Bookman Old Style" color="blue">
<marquee width="400" height="16" scrolldelay="100" behavior="alternate" align="middle">
歷史上的一刻: 2011年12月17日 19:30
</marquee>
</td>
</form>
<p>
<a href="homework8.php">[­回首頁]

</body>
</html>



