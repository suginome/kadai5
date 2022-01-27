<?php

//POSTで送られてきたデータは$_POST['目印名'];で取得
// name='text' → $_POST['text'];
$text = $_POST['text'];
$mail = $_POST['mail'];
$name = $_POST['name'];

$active = $_POST['on'];

$checked_arr = $_POST['conditions'];
$count = count($checked_arr);
// $moudle_num = $count*2;

// echo 'マッチした数は'.$count.'です';

$checked_arr = $_POST['conditions'];
$count = count($checked_arr);




?>


<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>エントリー完了</title>
  <link rel='stylesheet' href='css/kadai-1-reset.css'>
  <link rel='stylesheet' href='css/kadai-1.css'>
  <!-- あなたは採用のJkueriするならここへ！！！！<scrip src=> -->
<body>
  <div class='wrap'>
    <div class='prof'>
      
      <div class=prof__img>
      <?php
            $checked_arr = $_POST['conditions'];
            $count = count($checked_arr);
            if($count >= 3){
               echo "$count.<img src='img/light.png'>";
            }else{
               echo "$count.<img src='img/mukatuku.jpeg'>";
            }
      ?>
      </div>

      <div class='prof__contents'>
        <div class='prof__name'>きょうど料理亭 杉ノ目</div>
        <!-- <div class='prof__text'>あなたは採用！！</div>　　 -->
        <?php 
        if($count >= 3){
         echo "$count.採用前提です";
          }if($count <=2){
             echo $count. "他に合うところあるかも<br>";
          }
         
        ?>
        



        <!-- ↑にidつけて　idに対して〜〜を表示する的なjくえりー -->
      </div>
    </div>
    <!-- /.prof -->
    <!-- チェックがいくつかカウント　javaスクリプト　IF文 -->
    <!-- IF チェック個数 -->
    


    <div class='contents'>
      <div class='title'>入力情報</div>
      <div class='name'>氏名：<?= $name; ?></div>
      <div class='mail'>メールアドレス：<?= $mail; ?></div>
      <div class='text'>自己PR・質問：<?= $text; ?></div>
    </div>
    <!-- /.contents -->

    <div class='contents'>
      <div class='title'>INFO</div>
      <div class='text'>面接日時は別途ご案内致します</div>
    </div>
    <!-- /.contents -->
    <!-- 希望のシフト日程をさらにデータベースへ -->

    <!-- <div class='icon <?= $active; ?>'><img src='img/icon_01.png' alt=''></div> -->
    <!-- <div class='icon <?= $active; ?>'><img src='img/ikuradon.jpg' alt=''></div> -->

    <!-- <footer class='footer'>
      <small class='copy'>&copy;杉ノ目グループ</small>
    </footer> -->

  </div>
</body>
<!-- スクリプトタグで囲うようにJavaScript -->
<script>
if(c) ($)

</script>

</html>