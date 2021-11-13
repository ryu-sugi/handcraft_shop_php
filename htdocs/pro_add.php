<!DOCTYPE html>
<html lang="ja">
<head>
<?php include('./parts/head.php'); ?> <!-- include関数でパーツの分割化 -->
</head>

<body>
<div id="container">
  <?php include('./parts/header.php'); ?> <!-- include関数でパーツの分割化 -->

 <br> 出品情報追加 <br>
  <form method="post" action="pro_check.php">
    商品名を入力してください <br>
    <input type="text" name="name" style="width: 200px;"> <br> <br>
    価格を入力してください <br>
    <input type="text" name="price" style="width: 50px;"> <br> <br>
    カテゴリを選択してください <br> <br>
    <select name='item-category'>
      <option >カテゴリー選択</option>
      <option value='item1'>アクセサリー</option>
      <option value='item2'>手芸</option>
      <option value='item3'>財布・小物</option>
      <option value='item4'>イラスト・絵画</option>
      <option value='item3'>その他</option>
    </select>
  </form>




  <?php include('./parts/footer.php'); ?>

</div>
</body>
</html>