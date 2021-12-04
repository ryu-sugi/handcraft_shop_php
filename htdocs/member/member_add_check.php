<!DOCTYPE html>
<html lang="ja">
<head>
<?php include('../parts/head.php'); ?> <!-- include関数でパーツの分割化 -->
</head>

<body>

<?php

  $member_name=$_POST['name'];
  $member_address=$_POST['address'];
  $member_pass=$_POST['pass'];
  $member_pass2=$_POST['pass2'];

  $member_name=htmlspecialchars($member_name,ENT_QUOTES,'UTF-8');
  $member_address=htmlspecialchars($member_address,ENT_QUOTES,'UTF-8');
  $member_pass=htmlspecialchars($member_pass,ENT_QUOTES,'UTF-8');
  $member_pass2=htmlspecialchars($member_pass2,ENT_QUOTES,'UTF-8');

  if($member_name=='')
  {
    print 'ネームが入力されていません <br>';
  }
  else
  {
    print 'お名前：';
    print $member_name;
    print '<br>' ;
  }

  if($member_address=='')
  {
    print 'メールアドレスが入力されていません <br>';
  }
  else
  {
    print 'メールアドレス：';
    print $member_address;
    print '<br>' ;
  }

  if($member_pass=='')
  {
    print 'パスワードが入力されていません <br>';
  }


  if($member_pass!=$member_pass2)
  {
    print 'パスワードが一致しません <br>';
  }
  if($member_name==''||$member_address==''||$member_pass==''||$member_pass!=$member_pass2)
  {
    print '<form>';
    print '<input type="button" onclick="history.back()" value="戻る">';
    print '</form>';
  }
  else
  {
    $member_pass=md5($member_pass);
    print '<form method="post" action="member_add_done.php">';
    print '<input type="hidden" name="name" value="'.$member_name.'">';
    print '<input type="hidden" name="address" value="'.$member_name.'">';
    print '<input type="hidden" name="pass" value="'.$member_pass.'">';
    print '<br>' ;
    print <input type="text">
    print '</form>';
  }
  ?>
</body>
</html>