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

    try {

      $sign_up_address = $_POST['address'];
      $sign_up_pass = $_POST['pass'];

      $sign_up_address = htmlspecialchars($sign_up_address, ENT_QUOTES, 'UTF-8');
      $sign_up_pass = htmlspecialchars($sign_up_pass, ENT_QUOTES, 'UTF-8');

      $pass = md5($sign_up_pass);

      $dsn = 'mysql:dbname=shop;host=172.20.0.2;charset=utf8';
      $user = 'root';
      $password = 'password';
      $dbh = new PDO($dsn, $user, $password);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = 'SELECT name FROM mst_sign_up WHERE address=? AND pass=?';
      $stmt = $dbh->prepare($sql);
      $data[] = $sign_up_address;
      $data[] = $sign_up_pass;
      $stmt->execute($data);

      $dbh = null;

      $rec = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($rec == false) {
        print 'メールアドレスかパスワードが間違っています。 <br>';
        print '<a href="login.php">戻る</a>';
      } 
      else
      {
        header('Location: index.php');
        exit();
      }
    } catch (Exception $e) {
      print $e;
      exit();
    }

    ?>
    <?php include('../parts/footer.php'); ?>
  </div>
</body>