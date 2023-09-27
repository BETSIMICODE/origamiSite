
<?php

        //code...
        $title= $_POST["title"];
        $descri= $_POST["description"];
        $section= $_POST["sectionIdName"];
        require_once "../models/Models.php";
        $titleA=new TitleAction();
        $descriA=new DescriptionAction();
        $titleA->modif(1,$title,$section);
        $descriA->modif(2,$descri,$section);

        require_once "adminLoad.php";
        exit();
        loadAdmin("Modification bien effectuer");


?>