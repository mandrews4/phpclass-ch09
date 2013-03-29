<?php // Script 9.1 - customize.php
  if (isset($_GET['font_size'], $_GET['font_color'])) {
		setcookie('font_size', $_GET['font_size'], time()+10000, '/', '', 0);
		setcookie('font_color', $_GET['font_color'], time()+10000, '/', '', 0);

		$msg = '<p>Your settings have been entered! Click <a href="view_settings.php">here</a> to see them in action.</p>';
	} // End of submitted IF.
?>
<!doctype html>
<head>
	<title>Customize Your Settings</title>
	<style type="text/css">
	body {
	<?php
		if (isset($_GET['font_size'])) {
			$font_size = htmlentities($_GET['font_size']);
		} else if (isset($_COOKIE['font_size'])) {
			$font_size = htmlentities($_COOKIE['font_size']);
		} else {
			$font_size = "medium";
		}
		print "\t\tfont-size: $font_size;";

		if (isset($_GET['font_color'])) {
			$font_color = htmlentities($_GET['font_color']);
		} else if (isset($_COOKIE['font_color'])) {
			$font_color = htmlentities($_COOKIE['font_color']);
		} else {
			$font_color = "000";
		}
		print "\t\tcolor: #" . $font_color . ";";
	?>
</style>
</head>
<body>
	<?php
		if (isset($msg)) {
			print $msg;
		}
	?>
	<p>Use this form to set your preferences:</p>
	<form action="customize.php" method="get">
	<select name="font_size">
		<option value="">Font Size</option>
		<option value="xx-small" <?php if ($font_size == "xx-small") { print " selected"; } ?>>xx-small</option>
		<option value="x-small" <?php if ($font_size == "x-small") { print " selected"; } ?>>x-small</option>
		<option value="small" <?php if ($font_size == "small") { print " selected"; } ?>>small</option>
		<option value="medium" <?php if ($font_size == "medium") { print " selected"; } ?>>medium</option>
		<option value="large" <?php if ($font_size == "large") { print " selected"; } ?>>large</option>
		<option value="x-large" <?php if ($font_size == "x-large") { print " selected"; } ?>>x-large</option>
		<option value="xx-large" <?php if ($font_size == "xx-large") { print " selected"; } ?>>xx-large</option>
	</select>
	<select name="font_color">
		<option value="">Font Color</option>
		<option value="999" <?php if ($font_color == "999") { print " selected"; } ?>>Gray</option>
		<option value="0c0" <?php if ($font_color == "0c0") { print " selected"; } ?>>Green</option>
		<option value="00f" <?php if ($font_color == "00f") { print " selected"; } ?>>Blue</option>
		<option value="c00" <?php if ($font_color == "c00") { print " selected"; } ?>>Red</option>
		<option value="000" <?php if ($font_color == "000") { print " selected"; } ?>>Black</option>
	</select>
	<input type="submit" name="submit" value="Set My Preferences" />
	</form>
</body>
</html>
