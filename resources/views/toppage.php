<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <!--レスポンシブ-->
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <link rel="stylesheet" href="print.css" media="print">
  <title>映画探し|ふたりでなにみる？</title>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:700,400">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/normalize.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <header class="header">
    <p class="site-title-sub">何する？映画でもみよっか</p>
    <h1 class="site-title">ふたりでなにみる？</h1>
    <p class="site-descripction">レンタルショップへ行って、オンライン映画サイトを見ていろいろ探してもなかなか見つからない…「お前が決めろよ！」と無言の圧力でお互い気まずい。<br>「ふたりでなにみる？」は、あなたの気持ちやシチューエーションを選択し検索するだけで、オススメの映画を紹介するサービスです。</p>
    <div class="geners">
      <h1>ジャンルは？</h1>
      <label for="category" class="select-wrap entypo-down-open-mini">
        <select name="" id="category">
          <OPTION value="cry" selected>泣ける</OPTION>
          <OPTION value="laugh">笑える</OPTION>
          <OPTION value="sad">悲しい</OPTION>
          <OPTION value="fun">楽しい</OPTION>
          <OPTION value="excited">興奮</OPTION>
          <OPTION value="horror">怖い</OPTION>
          <OPTION value="happy">幸せ</OPTION>
          <OPTION value="heartwarming">ほのぼの</OPTION>
          <OPTION value="refreshing">すっきり</OPTION>
          <OPTION value="fantastic">幻想的</OPTION>
          <OPTION value="intellectual">知的</OPTION>
          <OPTION value="bittersweet">甘酸っぱい</OPTION>
          <OPTION value="heartrending">せつない</OPTION>
          <OPTION value="geek">オタク向け</OPTION>
        </SELECT>
      </label>
    </div>

    <div class="mood">
      <h1>ふたりはどんな気分？</h1>
      <label for="category" class="select-wrap entypo-down-open-mini">
        <select name="" id="category">
          <OPTION value="">ひとりめ</OPTION>
          <OPTION value="relax">のんびりしたい</OPTION>
          <OPTION value="warm">ほっこりしたい</OPTION>
          <OPTION value="daradara">だらだらしたい</OPTION>
          <OPTION value="dokidoki">ドキドキしたい</OPTION>
          <OPTION value="kimeru">勝負を決めたい</OPTION>
          <OPTION value="stuck">マンネリ打破</OPTION>
          <OPTION value="kyunkyun">キュンキュンしたい</OPTION>
        </SELECT>
      </label>
      <label for="category" class="select-wrap entypo-down-open-mini">
        <select name="" id="category">
          <OPTION value="">ふたりめ</OPTION>
          <OPTION value="relax">のんびりしたい</OPTION>
          <OPTION value="warm">ほっこりしたい</OPTION>
          <OPTION value="daradara">だらだらしたい</OPTION>
          <OPTION value="dokidoki">ドキドキしたい</OPTION>
          <OPTION value="kimeru">勝負を決めたい</OPTION>
          <OPTION value="stuck">マンネリ打破</OPTION>
          <OPTION value="kyunkyun">キュンキュンしたい</OPTION>
        </SELECT>
      </label>
    </div>
    <div class="buttons">
      <a class="button" href="#">検索する</a>
    </div>
  </header>


<form action="show.php">

	<h3>どんな映画が見たい？</h3>
	<select name="factor1">
		<?php foreach ($factor1 as $key => $value) : ?>
			<option value="<?php echo $value['factor_id']; ?>"><?php echo $value['factor']; ?></option>
		<?php endforeach; ?>
	</select>
	<br>

	<h3>どんな気分になりたい？</h3>
	<h4>一人目</h4>
	<select name="factor2">
		<?php foreach ($factor2 as $key => $value) : ?>
			<option value="<?php echo $value['factor_id']; ?>"><?php echo $value['factor']; ?></option>
		<?php endforeach; ?>
	</select>

	<h4>二人目</h4>
	<select name="factor3">
		<?php foreach ($factor2 as $key => $value) : ?>
			<option value="<?php echo $value['factor_id']; ?>"><?php echo $value['factor']; ?></option>
		<?php endforeach; ?>
	</select>

	<br>
	<br>


	<input type="submit" value="送信"><input type="reset" value="リセット">

</form>



  <footer class="footer">
    © ふたりでなにみる？
  </footer>
  <script src="lib/placeholders.min.js"></script>
</body>
</html>
