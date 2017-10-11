<html>

<body>

<title>新增.修改.刪除_帳號.密碼
</title>

<form action=homework8out.php method=post>

帳號<input type="text" name="a" value="" size="10" maxlength="6"><p>

密碼<input type="password" name="password" value="" size="10" maxlength="4"><p>

測試帳號:cr****<p>

測試密碼:1111<p>

<input type=submit><p>

secret.php 使用include("")函數 做SQL連線 (成功)<p>

homework8add.php 新增_帳號.密碼 (OK!加入session也成功!<font color="red">未設計空值查核</font>)<p> 

homework8view.php 插入 帳號.密碼資料成功<p>

homework8viewdata.php 看_帳號.密碼的資料庫內容(大成功! 2012/05/25 1:18)<p>

homework8addview.php (使用session判斷不成功!)<p>
<font color="red">
homework8modify.php 修改.刪除_帳號.密碼 (test中)<p>
</font>

homework8err.php 帳號或密碼錯誤(含空白未輸入) (成功_做在homework8out.php裡)<p>

homework8out.php 帳號.密碼登入執行網頁 (成功)<p>

homework8sucesslogin.php 帳號.密碼正確登入 (成功)<p>

homework8hack.php session 錯誤!請由正門進入喔![首頁]  (成功_做在homework8sucesslogin.php裡)<p>


</form>
</body>
</html>

