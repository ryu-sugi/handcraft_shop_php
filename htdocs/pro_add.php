<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Hand Craft Shop</title>
</head>

<body>
<div id="container">
  <header class="header">
   <div class="heading">
    <a href="index.php"> <h1>Hand Craft Shop</h1> </a>
   </div>
   <div class="navbar">
   <a href="pro_add.php" class="add_item">出品</a>
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


 <form method="post" action="pro_check.php"></form>
</div>
</body>
</html>