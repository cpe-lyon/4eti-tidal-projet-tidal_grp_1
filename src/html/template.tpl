
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <title>TIDAL</title>
    <link rel="stylesheet" href="css/template.css"></link>
    <link rel="icon" type="image/png" href="images/logo.png">
  </head>
  <body>
    <header>
      {include file="html/header.tpl"}
    </header>
    <div class="content">
      {$content}
    </div>
    <?p echo $_GET; ?>
    <footer>
      {include file="html/footer.tpl"}
    </footer>
  </body>
</html>
    


    