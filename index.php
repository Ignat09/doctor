<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Doctor</title>
        <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
$temp = rand(350, 420) / 10;
if ($temp < 38 and $temp > 36) {
    echo "<h3>", "у вас $temp °, вы здоровы";
} elseif ($temp > 38 and $temp < 40) {
    echo "<h3>", "у вас $temp °, вы заболеваете";
} elseif ($temp > 40 or $temp < 36) {
    echo "<h3>", "у вас $temp °, вы больны!";
}
?>
	</body>
</html>