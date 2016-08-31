<h2>投稿内容を確認</h2>

	<p>映画イメージ </p>
	<img src="<?php echo $_POST['image']?>" width="100px" height="100px">
	<br><br>

	<p>タイトル（30文字以内）</p>
	<?php  echo $_POST['movie_title'] ?>
	<br><br>
	
	<p>映画紹介</p>
	<?php  echo $_POST['introduce'] ?>
	<br><br>

	<p>監督</p>
	<?php  echo $_POST['cast'] ?>
	<br><br>

	<p>公開日</p>
	<?php  echo $_POST['release_day'] ?>
	<br><br>
	
	<p>年齢制限</p>
	<?php  echo $_POST['age_regulation'] ?>
	<br><br>

	<p>ジャンル</p>
	<?php foreach ($factor1 as $key => $value) : ?>
		<?php if ($value['factor_id'] == $_POST['factor1']): ?>
			<?php echo $value['factor']; ?>
		<?php endif; ?>
	<?php endforeach; ?>

	<br><br>

	<p>気分</p>
	<?php foreach ($factor2 as $key => $value) : ?>
		<?php if ($value['factor_id'] == $_POST['factor2']): ?>
			<?php echo $value['factor']; ?>
		<?php endif; ?>
	<?php endforeach; ?>

	<br><br>

	<p>一言コメント</p>
	<?php  echo $_POST['comment'] ?>
	<br><br>


	
<form method="post" action="/createMovieSubmit">

	<input name="_token" type="hidden" value="<?php csrf_token(); ?>"> 

	<input type="hidden" name="image" value="<?php echo $_POST['image']?>">
	<input type="hidden" name="movie_title"  value="<?php  echo htmlspecialchars($_POST['movie_title']) ?>">
	<input type="hidden" name="introduce" value="<?php  echo htmlspecialchars($_POST['introduce']) ?>">
	<input type="hidden" name="cast" value="<?php  echo htmlspecialchars($_POST['cast']) ?>">
	<input type="hidden" name="release_day" value="<?php  echo htmlspecialchars($_POST['release_day']) ?>">
	<input type="hidden" name="age_regulation" value="<?php  echo htmlspecialchars($_POST['age_regulation']) ?>">
	<input type="hidden" name="factor1" value="<?php  echo $_POST['factor1'] ?>">
	<input type="hidden" name="factor2" value="<?php  echo $_POST['factor2'] ?>">

	<input type="submit" value="登録">
</form>
