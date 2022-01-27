<?php

$message = '一緒に働く仲間を募集中！！';

$title = '採用情報！';

?>
<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'> 
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title><?= $title ?></title>
  <link rel='stylesheet' href='css/kadai-1-reset.css'>
  <link rel='stylesheet' href='css/kadai-1.css'>
</head>

<body>
  <!-- <div class='wrap'>
    <div class='prof'>
      <div class='prof__img'><img src='img/honten.jpg'alt=''></div>
      <div class='prof__contents'>
        <div class='prof__name'>きょうど料理亭杉ノ目</div>
        <div class='prof__text'><?php echo $message; ?></div>
      </div>
    </div> -->
    <!-- /.prof -->

<div class="top">
    <div class="top_img">
    <img src='img/honten.jpg'alt=''　width="700" height="660">
    </div>

    <div class="copy">
        <p>きょうど料理亭杉ノ目<br>一緒に働く仲間を募集中！！</p>
    </div>
</div>

      <form action='kadai-1next.php' method="post">
        <div class='contents'>
          <div class='title'>相性診断<br>〜該当する項目にチェックしてみてね〜</div>
          <div class='text'>
            <ul class="employment conditions">
                  <div>
                    <input type="checkbox" name="conditions[]" value="clothes">着物を着れるようになりたい<br>
                    <input type="checkbox" name="conditions[]" value="manner">和の作法を身につけたい<br>
                    <input type="checkbox" name="conditions[]" value="food">和食を学びたい<br>
                    <input type="checkbox" name="conditions[]" value="meal">美味しいまかない食べたい<br>
                    <input type="checkbox" name="conditions[]" value="party_people">パリピと働きたい<br>
                  </div>
            </ul>


          </div>
    <!-- </div> -->
    <!-- /.contents -->

  <!-- <form action='kadai-1next.php' method="post"> -->
      <p>エントリーはこちらから</p>
      <input type='radio' name="on" value="active">面接を希望する
      <input type='radio' name="on" value="">エントリーしない

      <hr>
      <p>お名前:<input type="text" name="name" size="20"></p>
      <p>MAIL:<input type="text" name="mail" size="20"></p>
      <p>質問・自己PRなんでも！<br><textarea name='text' id=''></textarea></p>

      <button type="submit">送信！</button>
</div>
    </form>

    <!-- <footer class='footer'>
      <small class='copy2'>&copy;杉ノ目グループ</small>
    </footer> -->

  </div>
</body>
</html>