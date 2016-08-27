<!DOCTYPE html>
<html>
<head>
	<title>toppage</title>
</head>
<body>

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



</body>
</html>