<!DOCTYPE html>
<html lang="ja">
<head>
<?php include('../parts/head.php'); ?> <!-- include関数でパーツの分割化 -->
</head>

<body>
<div id="container">
  <?php include('../parts/header.php'); ?> <!-- include関数でパーツの分割化 -->

  <?php

  $pro_name=$_POST['pro_name'];
  $pro_price=$_POST['pro_price'];
  $pro_category=$_POST['pro_category'];

  $pro_name=htmlspecialchars($pro_name,ENT_QUOTES,'UTF-8');
  $pro_price=htmlspecialchars($pro_price,ENT_QUOTES,'UTF-8');
  $pro_category=htmlspecialchars($pro_category,ENT_QUOTES,'UTF-8');

  if($pro_name=='')
  {
     print '商品名が入力されていません <br>';
  }
  else
  {
   print '商品名:';
   print $pro_name;
   print '<br>';
  }

  if(preg_match("/^[0-9]+$/", $pro_price)==0)
  {
   print '価格を正しく入力してください <br>';
  }
  else
  {
   print '価格:';
   print $pro_price;
   print '<br>';
  }

  if($pro_category== 'カテゴリー選択')
  {
   print 'カテゴリーを選択してください <br>';
  }
  else
  {
   print 'カテゴリー:';
   print $pro_category;
   print '<br>';
  }

  if($pro_name==''||$pro_price==''||$pro_category=='')
  {
    print '<form>';
    print '<input type="button" onclick="history.back()" value="戻る">';
    print '</form>';
  }
  else
  {

      print '上記の商品を出品します。 <br>';
      print '<form method="post" action="pro_add_done.php">';
      print '<input type="hidden" name="pro_name" value="'.$pro_name.'">';
      print '<input type="hidden" name="pro_price" value="'.$pro_price.'">';
      print '<input type="hidden" name="pro_name" value="'.$pro_category.'">';
      print '<br>';
      print '<input type="button" onclick="history.back()" value="戻る">';
      print '<input type="submit" value="OK">';
      print '</form>';
  }
  ?>
  <?php include('../parts/footer.php'); ?>

</div>
</body>
</html>