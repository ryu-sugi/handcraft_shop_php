<!DOCTYPE html>
<html lang="ja">
<head>
  <?php include('../parts/head.php'); ?> <!-- include関数でパーツの分割化 -->
</head>

<body>
  <?php include('../parts/header.php'); ?> <!-- include関数でパーツの分割化 -->

<?php

  try
  {
    $pro_name=$_POST['pro_name'];
    $pro_price=$_POST['pro_price'];
    $pro_category=$_POST['pro_category'];
    
    $pro_name=htmlspecialchars($pro_name,ENT_QUOTES,'UTF-8');
    $pro_price=htmlspecialchars($pro_price,ENT_QUOTES,'UTF-8');
    $pro_category=htmlspecialchars($pro_category,ENT_QUOTES,'UTF-8');

    $dsn = 'mysql:dbname=shop;host=172.20.0.3;port=3306;charset=utf8';
    $user = 'root';
    $password = 'password';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql='INSERT INTO mst_product(name,price,category) VALUE(?,?,?)';
    $stmt = $dbh->prepare($sql);
    $data[]=$pro_name;
    $data[]=$pro_price;
    $data[]=$pro_category;
    $stmt->execute($data);

    $dbh = null;

    print $pro_name;
    print 'を追加しました。 <br>';


    }
    catch(Exception $e)
    {
      print $e;
      exit();
    }
?>
  <a href="pro_list.php"></a>

  <?php include('../parts/footer.php'); ?>

</div>
</body>
</html>
