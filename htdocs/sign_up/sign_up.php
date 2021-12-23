<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include('../parts/head.php'); ?>
  <!-- include関数でパーツの分割化 -->
</head>

<body>
  <div id="container">
    <?php include('../parts/header.php'); ?>
    <!-- include関数でパーツの分割化 -->
    <div class="sign_up">
      会員登録画面 <br>
      <br>
      <form method="post" action="sign_up_check.php">
        お名前 <br>
        <input type="text" name="name"> <br>
        <br>
        メールアドレス <br>
        <input type="text" name="address"> <br>
        <br>
        パスワード <br>
        <input type="password" name="pass"> <br>
        <br>
        パスワードを再度入力 <br>
        <input type="password" value="pass2"> <br>
        <br>
        <input type="button" onclick="history.back()" value="戻る">
        <input type="submit" value="OK">  
      </form>
      <?php include('../parts/footer.php'); ?>
    </div>
  </div>
</body>