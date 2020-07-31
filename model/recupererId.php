
<?php require_once("model.php");

// 0. Decoder le json
$data = json_decode(file_get_contents('php://input'), true);

// 1. Parser le postdata (date, etc.)
$date = $data['id'];

// 2. Appeler "ajout evenement"
$succes = recupererId($date);

// 3. Repondre a la requete
echo $succes ? "Evenement suprimer" : "Erreur";
