<?php include('./parts/head.php'); ?> <!-- include関数でパーツの分割化 -->

<body>
<?php include('./parts/header.php'); ?> <!-- include関数でパーツの分割化 -->


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
    <?php include('./parts/footer.php'); ?>
  </div>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>