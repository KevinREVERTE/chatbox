<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="chatbox.css"/>
    <title>HTML page</title>
  </head>
  <body>
    <div class=maindiv>
      <h1>LOREM IPSUM</h1>
      <p>lorem ipsum lorem ipsum lorem ispum</p>
    </div>
    <div class=navdiv>
      <nav>
        <h1>bot</h1>
          <?php
          $intro=false;
          if($_GET['intro']){
            printf("<b>Qui es tu ?</b>");
            printf("<p>Je suis l'assistant bot 2018. Comme je suis drôle, vous pouvez m'appeler Edouard.</p>");
          }else{
            printf("<form>");
            printf("<button name=\"intro\" value=\"true\"><p id=marginbutton>Qui es tu ?</p></button>");
            printf("</form>");
          }
        ?>
      </nav>
    </div>
  </body>
</html>
