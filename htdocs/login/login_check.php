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

         $address = $_POST['code'];
         $pass = $_POST['pass'];

         $address = htmlspecialchars($address, ENT_QUOTES, 'UTF-8');
         $pass = htmlspecialchars($pass, ENT_QUOTES, 'UTF-8');

         $pass = md5($staff_pass);

         $dsn = 'mysql:dbname=shop;host=172.20.0.3;port=3306;charset=utf8';
         $user = 'root';
         $password = 'password';
         $dbh = new PDO($dsn, $user, $password);
         $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         $sql = 'SELECT name FROM mst_sign_up WHERE address=? AND pass=?';
         $stmt = $dbh->prepare($sql);
         $data[] = $address;
         $data[] = $pass;
         $stmt->execute($data);

         $dbh = null;

         $rec = $stmt->fetch(PDO::FETCH_ASSOC);

         if ($rec == false) {
            print 'メールアドレスかパスワードが間違っています。 <br>';
            print '<a href="login.php">戻る</a>';
         } else {
            header('Location: index.php');
            exit();
         }
      } catch (Exception $e) {
         print 'ただいま障害により大変ご迷惑をお掛けしております。';
         exit();
      }

      ?>
      <?php include('../parts/footer.php'); ?>
   </div>
</body>