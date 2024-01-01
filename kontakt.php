
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
    
    <article>
        
        <?php
    for ($i = 1; $i <= 6; $i++) {
    echo "<br>";
    }
?>

        <h1> KONTAKT</h1>
        
             <?php
    for ($i = 1; $i <= 2; $i++) {
    echo "<br>";
    }
?>
        
        <p> Tomáš Rozkydal</p>
        <p>Vozidlová 123</p>
        <p> Most</p>
        <p>434 01</p><br>
        
        <div class="odkazy">
        <p>můj kontaktní e-mail:<br>
        <a href="mailto:tomroz1972@gmail.com" target="_blank">tomroz1972@gmail.com</a>.</p>
        <p>vytvořeno za podpory:<br>
        <a href="http://www.itnetwork.cz" target="_blank">www.itnetwork.cz</a>.</p>
        
       </div> 
        
            
       
</article>
       
        
 </body>
 
 <footer>
        <a>Vytvořil &copy;     Tomáš Rozkydal</a>
    </footer>
</html>
