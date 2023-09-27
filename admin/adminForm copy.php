                                           <?php
  require_once "../models/Models.php";
  // Values recuperation
  $pageA= new PageAction();
  $pages=$pageA->showAll();

  $sectionA= new SectionAction();
  $sections= $sectionA->showAll();
  $pageSelect="1";
  $titleA=new TitleAction();
  $titles=$titleA->showAll();
  $descriptionA=new DescriptionAction();
  $descriptions=$descriptionA->showAll();
  $sectionIdSelect="1";


?>



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin panel OrigamiTech</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<style>
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

<script>
function toggleClassAndSetPageSelect(element, pageId) {
    // Retire la classe 'aSel' de tous les liens
    var links = document.querySelectorAll('.pageListLeft');
    links.forEach(function (link) {
        link.classList.remove('aSel');
    });

    // Ajoute la classe 'aSel' uniquement à l'élément actuellement cliqué
    element.classList.add('aSel');

    // Met à jour la variable $pageSelect avec la page sélectionnée
    <?php echo '$pageSelect = "' . $pageSelect . '";'; ?> // Attention aux guillemets

    // Met à jour les options du menu déroulant en fonction de la page sélectionnée
    var sectionList = document.getElementById('SectionList');
    sectionList.innerHTML = ''; // Efface toutes les options actuelles

    <?php
    foreach ($sections as $section) {
        echo 'if (' . $section["page_id"] . ' === pageId) {';
        echo '  var option = document.createElement("option");';
        echo '  option.value = "' . $section["section_id"] . '";';
        echo '  option.text = "' . strtoupper($section["section_name"]) . '";';
        echo '  sectionList.appendChild(option);';
        echo '}';
    }
    ?>
}
</script>
<script>
function updateSectionIdSelect() {
  // recuperer value du optionV selectionné"
  // mettre à jour la variable php $sectionIdSelect= optionV selectionnée ;
   // Récupérez la valeur de l'option sélectionnée
   // Récupérez la valeur de l'option sélectionnée
  var sectionSelect = document.getElementById('SectionList');
  var sectionId = sectionSelect.options[sectionSelect.selectedIndex].value;
  
  var content = document.getElementById('titleDescriContent');
  content.innerHTML = ''; // Efface toutes les options actuelles
  <?php
    echo '  var inputSI = document.createElement("input");';
    echo '  inputSI.value = ' . 'sectionId' . ';';
    echo '  inputSI.type = "text";';
    echo '  inputSI.name = "sectionIdName";';
    echo '  inputSI.id = "sectionIdName";';
    echo '  content.appendChild(inputSI);';
  foreach ($titles as $title) {
    $numberTitle=0;
    echo 'if (' . $title["section_id"] . ' == ' . 'sectionId' . ') {'; // Insérez sectionId ici
    echo '  var labelV = document.createElement("label");';
    echo '  labelV.htmlFor = "title";';
    $numberTitle++;
    echo '  labelV.textContent = "Titre '.$numberTitle.' :";';
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
    $numberDescri=0;
    echo 'if (' . $description["section_id"] . ' == ' . 'sectionId' . ') {';
    echo '  var labelV1 = document.createElement("label");';
    $numberDescri++;
    echo '  labelV1.htmlFor = "description";';
    echo '  labelV1.textContent = "Description '.$numberDescri.' :";';
    echo '  var inputV1 = document.createElement("input");';
    echo '  inputV1.value = "' . $description["descri_content"] . '";';
    echo '  inputV1.id = "description";';
    echo '  inputV1.type = "text";';
    echo '  inputV1.name = "description";';
    echo '  content.appendChild(labelV1);';
    echo '  content.appendChild(inputV1);';
    echo '}';
  }
  echo '  var inputSub = document.createElement("input");';
  echo '  inputSub.type = "submit";';
  echo '  inputSub.value = "Ajouter";';
  echo '  content.appendChild(inputSub);';




  ?>

}
</script>
<body>
<!-- partial:index.partial.html -->

<div class="dark-light">
    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
     <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" /></svg>
   </div>
<div class="app">
 <div class="header">
  <img src="../views/images/logo.png" alt="" class="logoOrigami">
  <div class="search-bar">
   <input type="text" placeholder="Search">
  </div>
  <div class="header-profile">
   <div class="notification">
    <?php
      if ($numberNotif!=0){
        echo '<span class="notification-number">'.$numberNotif.'</span>';
      }
    ?>
    <svg viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
     <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0" />
    </svg>
   </div>
   <img class="profile-img" src="https://images.unsplash.com/photo-1600353068440-6361ef3a86e8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="">
  </div>
 </div>
 <div class="wrapper">
  <div class="left-side">
   <div class="side-wrapper">
    <div class="side-title">Pages</div>
    <div class="side-menu">

    <?php
      foreach ($pages as $index => $page) {
          $class = ($index === 0) ? 'aSel' : '';
          echo '<a href="#" class="pageListLeft ' . $class . '" onclick="toggleClassAndSetPageSelect(this, ' . $page['page_id'] . ')">' . strtoupper($page["page_name"]) . '</a>';
      }
    ?>
    </div>
   </div>
   
  </div>
  <div class="main-container">
   <div class="main-header">
    <div class="listSectionContent">
      SECTION:
      <select name="Section" id="SectionList" onchange="updateSectionIdSelect()">
      <?php
          foreach($sections as $section){
            if ($section["page_id"]==$pageSelect){
              echo '<option class="optionV" value="'.$section["section_id"].'">'.strtoupper($section["section_name"]).'</option>';
            }
          }      
      ?>
      </select>
    </div>

   
<form class="newSection" action="addSection.php" method="post">
      <input type="text" placeholder="NEW SECTION" name="newSection" class="inputNewSection">
      <button class="btnAddSection">
        <img src="../views/images/plus.png" alt="" class="imgAddSection">
      </button>
  
      </form>

    
   </div>
   <div class="content-wrapper" style="width:100%;">
   <form id="titleDescriContent" action="add.php" method="post" enctype="multipart/form-data">
    <br>
    <script>
        updateSectionIdSelect();
    </script>
    <br>
    <br>
  </form>
   </div>
  </div>
 </div>
 <div class="messageContent">
  <?php echo $messAdd ?>
 </div>
 <div class="overlay-app">
 </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
