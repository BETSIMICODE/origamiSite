<?php
// Connexion à la base de données Always Data
$connexion = new mysqli("mysql-tsirionantsoa.alwaysdata.net", "313797_zanajaona", "zanajaona0201", "tsirionantsoa_origami");

// Vérification de la connexion
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

// Requête pour récupérer les textes depuis la base de données
$query = "SELECT description FROM texte";
$result = $connexion->query($query);

// Affichage des textes dans des paragraphes
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . htmlspecialchars($row["description"]) . "</p>";
    }
} else {
    echo "<p>Aucun texte n'a été trouvé dans la base de données.</p>";
}

// Fermer la connexion
$connexion->close();
?>
