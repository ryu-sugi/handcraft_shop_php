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

    <?php

    $sign_up_name = $_POST['name'];
    $sign_up_address = $_POST['address'];
    $sign_up_pass = $_POST['pass'];
    $sign_up_pass2 = $_POST['pass2'];

    $sign_up_name = htmlspecialchars($sign_up_name, ENT_QUOTES, 'UTF-8');
    $sign_up_address = htmlspecialchars($sign_up_address, ENT_QUOTES, 'UTF-8');
    $sign_up_pass = htmlspecialchars($sign_up_name, ENT_QUOTES, 'UTF-8');
    $sign_up_pass2 = htmlspecialchars($sign_up_name, ENT_QUOTES, 'UTF-8');

    if ($sign_up_name == '') {
      print 'お名前が入力されていません';
    } 
    else 
    {
      print '登録するお名前:';
      print $sign_up_name;
      print '<br>';
    }

    if ($sign_up_address == '') {
      print 'メールアドレスが入力されていません';
    } 
    else 
    {
      print '登録するメールアドレス:';
      print $sign_up_address;
      print '<br>';
    }

    if ($sign_up_pass == '') {
      print 'パスワードが入力されていません';
    }

    if ($sign_up_pass != $sign_up_pass2) {
      print 'パスワードが一致しません';
    }

    if ($sign_up_pass2 == '' || $sign_up_pass == '' || $sign_up_pass != $sign_up_pass2) {
      print '<form>';
      print '<input type="button" onclick="history.back()" value="戻る">';
      print '</form>';
    } else {
      $sign_up_pass = md5($sign_up_pass);
      print '<form method="post" action="sign_up_done.php">';
      print '<input type="hidden" name="name" value="' . $sign_up_name . '">';
      print '<input type="hidden" name="address" value="' . $sign_up_address . '">';
      print '<input type="hidden" name="pass" value="' . $sign_up_pass . '">';
      print '<br>';
      print '<input type="button" onclick="history.back()" value="戻る">';
      print '<input type="submit" value="OK">';
      print '</form>';
    }
    ?>
    <?php include('../parts/footer.php'); ?>
  </div>
  </div>
</body>