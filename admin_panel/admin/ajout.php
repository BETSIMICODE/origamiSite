<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $description = isset($_POST["description"]) ? $_POST["description"] : "";
    $title = isset($_POST["title"]) ? $_POST["title"] : "";
    
    // Connexion à la base de données Always Data
    $connexion = new mysqli("mysql-tsirionantsoa.alwaysdata.net", "313797_zanajaona", "zanajaona0201", "tsirionantsoa_origami");
    
    // Vérification de la connexion
    if ($connexion->connect_error) {
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }
    
    // Échapper les données pour éviter les failles d'injection SQL
    $description = $connexion->real_escape_string($description);
    $title = $connexion->real_escape_string($title);
    
    // Traitement de l'envoi de l'image
    $targetDir = "uploads/"; // Dossier de destination des images
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Vérification du type MIME du fichier
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $uploadedMimeType = finfo_file($finfo, $_FILES["image"]["tmp_name"]);
    finfo_close($finfo);
    
    // Liste des types MIME autorisés
    $allowedMimeTypes = array("image/jpeg", "image/png", "image/gif", "image/jpg");

    if (in_array($uploadedMimeType, $allowedMimeTypes)) {
        if ($_FILES["image"]["error"] > 0) {
            echo "Erreur lors du téléchargement de l'image: " . $_FILES["image"]["error"];
            // Arrêtez le script ici
        }

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            // L'image a été téléchargée avec succès, enregistrez le chemin dans la base de données
            $imagePath = $connexion->real_escape_string($targetFile);

            // Requête pour insérer les données dans la base de données
            $query = "INSERT INTO texte (description, image, title) VALUES ('$description', '$imagePath', '$title')";

            if ($connexion->query($query) === TRUE) {
                echo "Informations ajoutées avec succès.";
            } else {
                echo "Erreur : " . $connexion->error;
            }
        } else {
            echo "Erreur lors du téléchargement de l'image.";
        }
    } else {
        echo "Type de fichier non autorisé.";
        // Arrêtez le script ici
    }
    
    // Fermer la connexion
    $connexion->close();
}
?>
