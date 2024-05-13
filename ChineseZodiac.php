<?php
function chinese_zodiac_sign($year) {
    $zodiac_signs = array("Monkey", "Rooster", "Dog", "Boar", "Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Lamb");
    return $zodiac_signs[$year % 12];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = $_POST["year"];
    $zodiac_sign = chinese_zodiac_sign($year);
    echo "<p>The Chinese zodiac sign for the year $year is $zodiac_sign.</p>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chinese Zodiac Sign Finder</title>
    <style>
		body {
			font-family: "Microsoft YaHei", "Helvetica Neue", Helvetica, Arial, sans-serif;
			background-color: #F7DCB4;
			color: #7F8C8D;
			text-align: center;
		}
		
		h1 {
			font-size: 48px;
			font-weight: bold;
			margin-top: 50px;
		}
		
		form {
			margin-top: 30px;
			display: inline-block;
			background-color: #EAECEE;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
		}
		
		label {
			font-size: 24px;
			font-weight: bold;
			display: block;
			margin-bottom: 10px;
		}
		
		input[type=number] {
			font-size: 24px;
			padding: 5px;
			border-radius: 5px;
			border: none;
			margin-bottom: 20px;
		}
		
		button[type=submit] {
			font-size: 24px;
			padding: 10px 20px;
			background-color: #F5B041;
			color: #FFF;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		
		button[type=submit]:hover {
			background-color: #F39C12;
		}
		
		p {
			font-size: 24px;
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<h1>Chinese Zodiac Sign Finder</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="year">Enter a year:</label>
		<input type="number" id="year" name="year" min="0000" max="9999" required>
		<button type="submit">Find Zodiac Sign</button>
	</form>
</body>
</html>

