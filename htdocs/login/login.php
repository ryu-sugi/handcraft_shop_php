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

    <div class="class_login">
      ログイン画面 <br>
      <br>
      <form method="post" action="login_check.php">
        メールアドレス <br>
        <input type="text" name="address"> <br>
        <br>
        パスワード <br>
        <input type="password" name="pass"> <br>
        <br>
        <input type="submit" value="ログイン">
      </form>
      <?php include('../parts/footer.php'); ?>
    </div>
  </div>
</body>