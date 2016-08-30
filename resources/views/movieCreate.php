
<?php if(isset($_GET['movie_title'])): ?>

	<form method="get" action="">

		<p>映画を検索
			<br><input type="text" name="movie_title" size="40" value="<?php echo $_GET['movie_title'];?>">
			<br><input type="submit" value="映画情報を取得">
		</p>
		
	</form>

	<br>

	<form method="post" action="">

		<p>タイトル（30文字以内）
			<br><input type="text" name="movie_title" size="40" value="<?php echo $data['trackName']?>">
		</p>

		<p>映画紹介
			<br><textarea name="introduce" rows="12" cols="80"><?php echo $data['longDescription']?></textarea>
		</p>

		<p>監督
			<br><input type="text" name="cast" size="40" value="<?php echo $data['artistName']?>">
		</p>

		<p>公開日
			<br><input type="text" name="release_day" size="40" value="<?php echo $data['releaseDate']?>">
		</p>

		<p>年齢制限
			<br><input type="text" name="age_regulation" size="40" value="<?php echo $data['contentAdvisoryRating']?>">
		</p>

		<input type="submit" value="登録">
	</form>

<?php else: ?>

<form method="get" action="">

	<p>映画を検索
		<br><input type="text" name="movie_title" size="40">
		<br><input type="submit" value="映画情報を取得">
	</p>
	
</form>

<br>

<form method="post" action="">

	<p>タイトル（30文字以内）
		<br><input type="text" name="movie_title" size="40">
	</p>

	<p>映画紹介
		<br><textarea name="introduce" rows="12" cols="80"></textarea>
	</p>

	<p>監督
		<br><input type="text" name="cast" size="40">
	</p>

	<p>公開日
		<br><input type="text" name="release_day" size="40">
	</p>

	<p>年齢制限
		<br><input type="text" name="age_regulation" size="40">
	</p>

	<input type="submit" value="登録">
</form>

<?php endif; ?>
