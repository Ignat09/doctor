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
// if ($temp < 38 and $temp > 36) {
//     echo "<h3>", "у вас $temp °, вы здоровы", </h3>;
// } elseif ($temp > 38 and $temp < 40) {
//     echo "<h3>", "у вас $temp °, вы заболеваете", </h3>;
// } elseif ($temp > 40 or $temp < 36) {
//     echo "<h3>", "у вас $temp °, вы больны!", </h3>;
// }
$str = ($temp < 37) ? "<h3>" . "у вас $temp °, вы здоровы" . "</h3>" : (($temp > 37 and $temp < 38) ? "<h3>" . "у вас $temp °, вы заболеваете" . "</h3>" : "<h3>" . "у вас $temp °, вы больны!" . "</h3>");
echo $str;
?>
	</body>
</html>