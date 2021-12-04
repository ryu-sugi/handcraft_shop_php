<!DOCTYPE html>
<html lang="ja">
<head>
<?php include('../parts/head.php'); ?> <!-- include関数でパーツの分割化 -->
</head>

<body>
 会員登録 <br>
 <br>
  <form method="post" action="member_add_check.php">
    フルネームを入力してください <br>
    <input type="text" name="name" style="width:200px"> <br>
    メールアドレスを入力してください <br>
    <input type="text"  name="address" style="width:200px"> <br>
    パスワードを入力してください <br>
    <input type="password" name="pass" style="width:200px"> <br>
    パスワードをもう一度入力してください <br>
    <input type="password" name="pass2" style="width:200px"> <br>
    <br>
    <input type="button" onclick="history.back()" value="戻る">
    <input type="submit" value="OK">
  </form>

</body>
</html>