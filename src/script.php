<?php

$request = "SELECT keywords.name as name, patho.idp as pathoIdp, patho.type as pathoType, patho.desc as pahtoDesc, symptome.desc as symptDesc
FROM symptpatho
INNER JOIN patho ON patho.idp = symptpatho.idp
INNER JOIN keysympt ON keysympt.ids = symptpatho.ids
INNER JOIN keywords ON keysympt.idk = keywords.idk
INNER JOIN symptome ON symptome.ids = symptpatho.ids
WHERE keywords.name in ('voix','vomissement')";

function requestSQl($request) {
    try {
        $db = new PDO("pgsql:host=localhost;port=5432;dbname=acudb;user=pgtp;password=tp");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
      }
      // Exécution de la requête
      $stmt = $db->prepare($request);
      $stmt->execute();

      // Traitement des résultats
      $valren ="";
      // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      //   // log row variable
      //   $valren = $valren . "<script>console.log(" . json_encode($row) . ");</script>";
      //   $valren = $valren . "Name : " .$row["name"] . "Pathologie : " . $row["pathodesc"] . "Symptôme : " . $row["symptdesc"] . "Type : " . $row["pathotype"] . "ID : " . $row["pathoidp"] . "<br>";
      //   // $valren = $valren . "Name : " . $row["name"] . "<br>";
      // }
      // Fermeture de la connexion
      $valren = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $db = null;

      return $valren;
    }   
    
// echo(requestSQL($request));

?>