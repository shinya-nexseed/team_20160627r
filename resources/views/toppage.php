<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <!--レスポンシブ-->
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <link rel="stylesheet" href="print.css" media="print">
  <title>映画探し|ふたりでなにみる？</title>
  <link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/notosansjapanese.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="bg">
  <div class="box">
  <header class="header">
    <p class="site-title-sub">何する？映画でもみよっか</p>
    <h1 class="site-title">ふたりでなにみる？</h1>

    <form action="show.php">
    <div class="geners">
      <h1>ジャンルは？</h1>
      <label for="category" class="select-wrap entypo-down-open-mini">
        <select name="factor1" id="category">
          <?php foreach ($factor1 as $key => $value) : ?>
            <option value="<?php echo $value['factor_id']; ?>"><?php echo $value['factor']; ?></option>
          <?php endforeach; ?>
        </SELECT>
      </label>
    </div>

    <div class="mood">
      <h1>どんな気分？</h1>
      <label for="category" class="select-wrap entypo-down-open-mini">
        <select name="factor2" id="category">
          <?php foreach ($factor2 as $key => $value) : ?>
            <option value="<?php echo $value['factor_id']; ?>"><?php echo $value['factor']; ?></option>
          <?php endforeach; ?>
        </SELECT>
      </label>
    <div class="buttons">
      <input type="submit" value="検索する" class="button">
    </div>
  </form>

  <h2>ふたりでなにみる？とは</h3>
  <p class="ac-container">レンタルショップへ行って、オンライン映画サイトを見ていろいろ探してもなかなか見つからない…「お前が決めろよ！」と無言の圧力でお互い気まずい。<br>「ふたりでなにみる？」は、あなたの気持ちやシチューエーションを選択し検索するだけで、オススメの映画を紹介するサービスです。</p>
  </header>

  <footer class="footer">
    © ふたりでなにみる？
  </footer>
  <script src="lib/placeholders.min.js"></script>
</body>
</html>
