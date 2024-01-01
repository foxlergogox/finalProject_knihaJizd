<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>knihajizd</title>
        <link rel="stylesheet" href="styllil.css" type="text/css" />
    </head>
    <body>
    <header>
        <nav>
            <ul>
                <li class="co-je"><a href="index.php">domů</a></li>
                <li><a class="co-je" href="kontakt.php">Kontakt</a></li>
            </ul>
        </nav>
    </header>
       
       
        
<?php

$date = $_POST['zadejDatum'];
$spz = $_POST['zadejSpz'];
$startKm = $_POST['pocatecniKm'];
$finishKm = $_POST['koncoveKm'];




// Načtení wrapperu
require_once('Db.php');
Db::connect('127.0.0.1', 'kniha_jizd', 'root', '');
Db::query('
    INSERT INTO kilometry (datumJiz, SPZ, startKm, finishKm)
    VALUES (?, ?, ?, ?)
', $_POST['zadejDatum'], $_POST["zadejSpz"], $_POST['pocatecniKm'], $_POST['koncoveKm']
,);

echo ("datum jízdy: $date,<br>"
        . "SPZ vozidla je: $spz,<br>"
        . "počáteční km: $startKm,<br>"
        . "konečné km: $finishKm,<br>"
     );

$kilometry = Db::queryAll('
			SELECT *
			FROM kilometry
		');
		echo('<h2>Výpis km</h2><table border="1">');
		foreach ($kilometry as $kilometr) {
			echo('<tr><td>' . htmlspecialchars($kilometr['SPZ']));
			echo('</td><td>' . htmlspecialchars($kilometr['startKm']));
			echo('</td><td>' . htmlspecialchars($kilometr['finishKm']));
                        echo('</td><td>' . htmlspecialchars($kilometr['datumJiz']));
			echo('</td></tr>');
		}
		echo('</table>');
?>
 </body>
 
 <footer>
        <a>Vytvořil &copy;     Tomáš Rozkydal</a>
 </footer>
</html>   