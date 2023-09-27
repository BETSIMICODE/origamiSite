<?php
  $titleA=new TitleAction();
  $titles=$titleA->showAll();
  $descriptionA=new DescriptionAction();
  $descriptions=$descriptionA->showAll();
  $sectionIdSelect="1";
?>

<script>
function updateSectionIdSelect(selectElement) {
  var selectedOption = selectElement.options[selectElement.selectedIndex];
  var sectionId = selectedOption.value;
  <?php echo 'var sectionIdSelect = "'; ?> + sectionId + '<?php echo '";'; ?>
  
  alert("sectionIdSelect:", sectionIdSelect);
  var content = document.getElementById('titleDescriContent');
  content.innerHTML = ''; // Efface toutes les options actuelles
  <?php
  foreach ($titles as $title) {
    echo 'if (' . $title["section_id"] . ' == sectionIdSelect) {';
    echo '  var labelV = document.createElement("label");';
    echo '  labelV.htmlFor = "title";';
    echo '  labelV.textContent = "Titre :";'; // Ajoutez le texte "Titre :"
    echo '  var inputV = document.createElement("input");';
    echo '  inputV.value = "' . $title["title_content"] . '";';
    echo '  inputV.id = "title";';
    echo '  inputV.type = "text";';
    echo '  inputV.name = "title";';
    echo '  content.appendChild(labelV);';
    echo '  content.appendChild(inputV);';
    echo '}';
  }

  foreach ($descriptions as $description) {
    echo 'if (' . $description["section_id"] . ' == sectionIdSelect) {';
    echo '  var labelV1 = document.createElement("label");';
    echo '  labelV1.htmlFor = "description";';
    echo '  labelV1.textContent = "Description :";'; // Ajoutez le texte "Description :"
    echo '  var inputV1 = document.createElement("input");';
    echo '  inputV1.value = "' . $description["descri_content"] . '";';
    echo '  inputV1.id = "description";';
    echo '  inputV1.type = "text";';
    echo '  inputV1.name = "description";';
    echo '  content.appendChild(labelV1);';
    echo '  content.appendChild(inputV1);';
    echo '}';
  }
  ?>
}
</script>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulaire d'Ajout</title>
  <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
  <form id="titleDescriContent" action="add.php" method="post" enctype="multipart/form-data">
    <br>
    <?php
      foreach($titles as $title){
        if ($title["section_id"]=="1"){
          echo '
          <label for="title">Titre :</label>
          <input type="text" id="title" name="title" value="'.$title["title_content"].'">
          
          ';
        }
      } 
    ?>
    
    <br>
      
    <?php
      foreach($descriptions as $description){
        if ($description["section_id"]==$sectionIdSelect){
          echo '
          <label for="description">Description :</label>
          <input id="description" type="text" name="description" value="'.$description["descri_content"].'">
          
          ';
        }
      } 
    ?>
    
    
    
    
    <script>
      function useCk(){
        CKEDITOR.replace('description');

      }
    </script>
    <br>

    <input type="submit" value="Ajouter">
  </form>
  <button class="useCK" onclick="useCk()">Ck Editor</button>
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
.content-wrapper form {
  width:100%;
  background: transparent;
  border: 1px solid #ccc;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

/* Styles pour les étiquettes */
.content-wrapper label {
  width:100%;
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
  color: white; /* Couleur du texte en noir */
}

/* Styles pour les champs de saisie */
.content-wrapper input[type="file"]{
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  color: white; /* Couleur du texte en noir */
}
.content-wrapper input[type="text"],
.content-wrapper textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  color: black; /* Couleur du texte en noir */
}

/* Styles pour le bouton */
.content-wrapper input[type="submit"] {
  width:100%;
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

.content-wrapper input[type="submit"]:hover {
  background-color: #0056b3;
}

/* Styles pour CKEditor */
.content-wrapper .cke {
  width:100%;
  margin-top: 10px;
}

</style>
