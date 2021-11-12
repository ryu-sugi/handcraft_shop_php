<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../stylesheets/style.css">
  <link rel="stylesheet" type="text/css" href="../stylesheets/html5reset-1.6.1.css">
  <title>Hand Craft Shop</title>
</head>

<body>
<div id="container">
  <header class="header">
    <div class="heading">
     <a href="index.php"> <h1>Hand Craft Shop</h1> </a>
    </div>
    <div class="navbar">
      <a href="item.php" class="search">アイテムを探す</a>
      <a href="login.php" class="login">ログイン</a>
      <a href="cart.php" class="cart">カート</a>
    </div>
    <div class="sp-menu">
      <!-- Webフォントから取り出したアイコン -->
      <span class="material-icons" id="open">menu</span>
      <div class="overlay">
        <span class="material-icons" id="close">close</span>
        <nav class="hamburger-nav">
          <ul class="nav-list">
            <li><a href="news.php">お知らせ</a></li>
            <li><a href="comp.php">会社概要</a></li>
            <li><a href="info.php">お問合せ</a></li>
          </ul>
        </nav>
      </div>
      </div>
    </header>

    
  <div class="main-content">
    <div class="first-content">
      <div class="first-view">
        <img src="../phots/phot1.jpg" alt="メイン画像" class="phot1">
      </div>
    <!-- メイン情報を表示する -->
    <div class="sample-phot">
      <div class="sample-phot1">
        <img src="../phots/phot2.jpg" alt="sample-phot1" width="200px" height="200px" class="sample-phot1">
        <br> サンプル商品1 <br>
        ¥500
      </div>
      <div class="sample-phot2">
        <img src="../phots/phot3.jpg" alt="sample-phot2" width="200px" height="200px" class="sample-phot2">
        <br> サンプル商品2 <br>
        ¥800
      </div>
      <div class="sample-phot3">
        <img src="../phots/phot4.jpg" alt="sample-phot3" width="200px" height="200px" class="sample-phot3">
        <br> サンプル商品3 <br>
        ¥1000
      </div>
    </div>
    <br> <br> <br> <br>

  <div id="footer">
    <div class="footer-content">
      Author is Ryuji Sugita.
    </div>
  </div>
  </div>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>