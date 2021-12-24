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
      $sign_up_name = $_POST['name'];
      $sign_up_address = $_POST['address'];
      $sign_up_pass = $_POST['pass'];

      $sign_up_name = htmlspecialchars($sign_up_name, ENT_QUOTES, 'UTF-8');
      $sign_up_address = htmlspecialchars($sign_up_address, ENT_QUOTES, 'UTF-8');
      $sign_up_pass = htmlspecialchars($sign_up_name, ENT_QUOTES, 'UTF-8');

      $dsn = 'mysql:dbname=shop;host=172.20.0.2;charset=utf8';
      $user = 'root';
      $password = 'password';
      $dbh = new PDO($dsn, $user, $password);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = 'INSERT INTO mst_sign_up(name,address,pass) VALUE(?,?,?)';
      $stmt = $dbh->prepare($sql);
      $data[] = $sign_up_name;
      $data[] = $sign_up_address;
      $data[] = $sign_up_pass;
      $stmt->execute($data);

      $dbh = null;

      print $sign_up_name;
      print 'さんを追加しました。<br/>';
    } 
    catch (Exception $e) 
    {
      print $e;
      exit();
    }

    ?>

    <a href="../index.php">戻る</a>

    <?php include('../parts/footer.php'); ?>
  </div>
  </div>
</body>