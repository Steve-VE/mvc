<?php
// Modèle : se charge de récupérer les données
include "models/model.php";


function load_page($page){
    global $content;
    include "views/". $page .".php";
}