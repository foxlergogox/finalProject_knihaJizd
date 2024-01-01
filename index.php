
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
                <li class="co-je"><a href="coJeKnihaJizd.php">Co je kniha jízd</a></li>
                <li><a class="co-je" href="kontakt.php">Kontakt</a></li>
                <li class="co-je"><a href="vypisKnihyJizd.php">Výpis knihy jízd</a></li>
            </ul>
        </nav>
    </header>
    
    <article>
<?php
    for ($i = 1; $i <= 6; $i++) {
    echo "<br>";
    }
?>
   <h1>Kniha jízd</h1>
   
   <?php
    for ($i = 1; $i <= 3; $i++) {
    echo "<br>";
    }
?>
          
<form method="POST" action="vypocetJizdy.php">
      
    datum      <input name="zadejDatum" type="date" /><br />  <!--vytvoří okénko pro zadání datumu-->
       
    SPZ      <input name="zadejSpz" type="text" pattern=".*\s+.*" required/><br />  <!--vytvoří okénko pro zadání SPZ-->
        
    stav tachometru před jízdou    <input name="pocatecniKm" type="text" /><br /> <!--vytvoří okénko pro zadání počátečních km -->

    stav tachometru po jízdě    <input name="koncoveKm" type="text" /><br />    <!--vytvoří okénko pro zadání koncových km -->
    </br>

        
    <input type="submit" value="Odeslat" />
    </form>   

   
<?php
    for ($i = 1; $i <= 3; $i++) {
    echo "<br>";
    }
?>
    
    </article>
       
        
 </body>
 
 <footer>
        <a>Vytvořil &copy;     Tomáš Rozkydal</a>
    </footer>
</html>
