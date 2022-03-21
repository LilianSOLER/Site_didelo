<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compte Rendu <?php echo(isset($_GET["tp"]) && isset($_GET["prof"]) ? "TP" . $_GET["tp"] . " - " . $_GET["prof"] :"TP1 - Pittion");?></title>
  <link rel="stylesheet" type="text/css" href="css/compte_rendu.css">
</head>

<body>
  <?php
  require_once '../../php/php-markdown-lib/Michelf/Markdown.inc.php';
  use Michelf\Markdown;

  $path = "../../../PW6";
  if(!isset($_GET["tp"])){
    $_GET["tp"] = "1";
  }
  switch($_GET["prof"]){
    case "allegre":
      $path .= "/1-Allegre/Exercices/TP".$_GET["tp"]."/compte-rendu.md";
      break;
    case "pittion":
      $path .= "/2-Pittion/Exercices/TP".$_GET["tp"]."/compte-rendu.md";
      break;
    default:
      $path .= "/2-Pittion/Exercices/TP1/compte-rendu.md";
      break;
  }

  echo Markdown::defaultTransform(file_get_contents($path));
  ?>
</body>

</html>