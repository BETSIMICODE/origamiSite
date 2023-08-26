<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulaire d'Ajout</title>
  <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
  <form action="ajout.php" method="post" enctype="multipart/form-data">
    <label for="image">Image :</label>
    <input type="file" id="image" name="image" accept="image/*">
    <br>

    <label for="title">Titre :</label>
    <input type="text" id="title" name="title">
    <br>

    <label for="description">Description :</label>
    <textarea id="description" name="description"></textarea>
    <script>
      CKEDITOR.replace('description');
    </script>
    <br>

    <input type="submit" value="Ajouter">
  </form>
</body>
</html>
<style>
* {
  
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
}

<!--Styles pour le corps de la page-->
body {
  
  font-family: Arial, sans-serif;
  background: transparent;
  color: #333;
  padding: 20px;
}

/* Styles pour le formulaire */
form {
  width:100%;
  background: transparent;
  border: 1px solid #ccc;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

/* Styles pour les étiquettes */
label {
  width:100%;
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
  color: white; /* Couleur du texte en noir */
}

/* Styles pour les champs de saisie */
input[type="file"]{
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  color: white; /* Couleur du texte en noir */
}
input[type="text"],
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  color: black; /* Couleur du texte en noir */
}

/* Styles pour le bouton */
input[type="submit"] {
  width:100%;
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

input[type="submit"]:hover {
  background-color: #0056b3;
}

/* Styles pour CKEditor */
.cke {
  width:100%;
  margin-top: 10px;
}

</style>
