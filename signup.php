<h1>新規ユーザ登録</h1>
<!-- 処理を行う宛先を指定 -->
<form action="register.php" method="post">
<div>
    <label>名前：<label>
    <input type="text" name="name" required>
</div>
<div>
    <label>ID：<label>
    <input type="text" name="userid" required>
</div>
<div>
    <label>PW：<label>
    <input type="password" name="pass" required>
</div>
<input type="submit" value="新規登録">
</form>
<p>すでに登録済みの方は<a href="login_form.php">こちら</a></p>
