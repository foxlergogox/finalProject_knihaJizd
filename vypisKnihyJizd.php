<html lang="cs-cz">

<head>
    <meta charset="utf-8" />
    <title>kniha jízd TR</title>
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
require_once('Db.php');
Db::connect('127.0.0.1', 'kniha_jizd', 'root', '');
$kilometry = Db::queryAll('
			SELECT *
			FROM kilometry
		');
		echo('<h2>Všechny zápisy do knihy jízd</h2><table border="1">');
		foreach ($kilometry as $kilometr) {
			echo('<tr><td>' . htmlspecialchars($kilometr['SPZ']));
			echo('</td><td>' . htmlspecialchars($kilometr['startKm']));
			echo('</td><td>' . htmlspecialchars($kilometr['finishKm']));
                        echo('</td><td>' . htmlspecialchars($kilometr['datumJiz']));
			echo('</td></tr>');
		}
		echo('</table>');
                
 Db::connect('127.0.0.1', 'kniha_jizd', 'root', '');
$kilometry = Db::queryAll('
			SELECT SPZ, datumJiz
			FROM kilometry
                        WHERE SPZ >= 500
                        
		');               
                echo('<h2>Výpis výběru</h2><table border="1">');
		foreach ($kilometry as $kilometr) {
			echo('<tr><td>' . htmlspecialchars($kilometr['SPZ']));
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
