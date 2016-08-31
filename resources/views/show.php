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
  <h2 class="heading">おすすめ映画</h2>

  <section class="movie">
    <div class="container">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
          <div class="recomend-description">
            <img class="images" src="../assets/images/sample.jpeg" alt="sample1">
            <div class="description">
              <h1 class="title"><?php echo $movie['title']; ?></h1>
              <p class="year"><?php echo $movie['release_day']; ?></p>
              <p class="cast"><?php echo $movie['cast']; ?></p>
              <p class="age"><?php echo $movie['age_regulation']; ?></p>
              <h2 class="info">作品情報</h2>
                <p class="description"><?php echo $movie['introduce']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-xs-2 col-xs-offset-5">
          <div class="buttons">
            <a class="button button-showy" href="#contact">検索</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="reviews">
	<h2 class="heading">レビュー</h2>

	<?php foreach ($reviews as $key => $value): ?>
		<div class="reviews-wrapper">
			<div class="review-box">
        <h2 class="review-title"><?php echo $value['title']; ?></h2>
				<h3 class="review-poster"><?php echo $value['poster_name']; ?></h3>
				<p class="review-text"><?php echo $value['comment']; ?></p>
			</div>
		</div>
	<?php endforeach; ?>

  </section>
  </div>

  <section class="review-post" id="review-post">
    <h2 class="heading">レビュー投稿</h2>
    <form class="review-post-form">
      <input type="text" name="name" placeholder="NAME">
      <textarea name="message" placeholder="MESSAGE"></textarea>
      <input type="submit" value="SEND">
    </form>
  </section>


  <footer class="footer">
    © ふたりでなにみる？
  </footer>
  <script src="lib/placeholders.min.js"></script>
</body>
</html>