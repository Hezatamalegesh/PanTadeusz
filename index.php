<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Pan Tadeusz</title>
</head>
<body>
    <h1>Pan Tadeusz, czyli ostatni zajazd na Litwie: historia szlachecka z roku 1811 i 1812 we dwunastu księgach wierszem</h1>
    <div class="container">
       <div class="row">
        <div class="col-4"> 
</div>
    <div>
    <h2>Spis Treści</h2>
    <ul>
		<li><a href="./index.php">Strona główna</li>
		<?php
			for($k=1; $k <= 12 ; $k++) {
				print("<li><a href=\"./index.php?k=$k&name=Ksa\">Księga $k</a></li>");
			}
		?>
    </ul>
</div>
<div class="col-8">
<?php
	if (isset($_GET['k'])){
		$k = $_GET['k'];
		include_once("k$k.html");
	} else {
		print('<img src="https://mm.pwn.pl/ency/jpg/583/f/d10i0067.jpg"/>');
	}
	$k = $_GET['k'];
	print($_GET['name']);
	include_once("k$k.html");
?>
</div> 
</body>
</html>