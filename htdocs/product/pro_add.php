<!DOCTYPE html>
<html lang="ja">
<head>
<?php include('../parts/head.php'); ?> <!-- include関数でパーツの分割化 -->
</head>

<body>
<div id="container">
  <?php include('../parts/header.php'); ?> <!-- include関数でパーツの分割化 -->
  
  <div class="pro_add">
  <br> 出品情報追加 <br>
    <form method="post" action="pro_add_check.php" enctype="multipart/form-data">
      商品名を入力してください <br>
      <input type="text" name="pro_name" style="width: 200px;"> <br> <br>
      価格を入力してください <br>
      <input type="text" name="pro_price" style="width: 50px;"> <br> <br>
      カテゴリを選択してください <br> <br>
      <select name='pro_category' class="category">
        <option value='カテゴリー選択'>カテゴリー選択</option>
        <option value='アクセサリー' class="item1">アクセサリー</option>
        <option value='手芸' class="item2">手芸</option>
        <option value='財布' class="item3">財布・小物</option>
        <option value='イラスト・絵画' class="item4">イラスト・絵画</option>
        <option value='その他' class="item5">その他</option>
      </select> <br> <br>
      画像を選択してください。<br> <br>
      <input type="file" name="pro_phot" style="width: 200px"> <br> <br>
      <input type="button" onclick="history.back" value="戻る">
      <input type="submit" value="OK">
    </form>
  </div>

  <?php include('../parts/footer.php'); ?>

</div>
</body>
</html>