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
      <div class="container pt20">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-sm-offset-4">
            <div class="form-group">
            <label class="control-label">ジャンルは？</label>
            <div class="select-wrap select-circle">
              <select name="factor1" id="category">
                <?php foreach ($factor1 as $key => $value) : ?>
                  <option value="<?php echo $value['factor_id']; ?>"><?php echo $value['factor']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
         </div>
        </div>
      </div>

      <div class="container pt20">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-sm-offset-4">
            <div class="form-group">
              <label class="control-label">ジャンルは？</label>
                <div class="select-wrap select-circle">
                  <select name="factor2" id="category">
                    <?php foreach ($factor2 as $key => $value) : ?>
                      <option value="<?php echo $value['factor_id']; ?>"><?php echo $value['factor']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>


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
