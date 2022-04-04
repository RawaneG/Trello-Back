<?php
///Recuperation des donnees du fichier
function json_to_array()
{
    $dataJson = file_get_contents(PATH_DB);
    // $data = json_decode($dataJson,true);
    return $dataJson;
}
//Enregistrement et Mis a jour des donnees du fichier
function array_to_json($key,$newTask)
{
    // ici on récupere le contenu du ficher json sous format string
    $dataJson = file_get_contents(PATH_DB);
    // ici on le transforme en tableau
    $data = json_decode($dataJson,true);
    // on ajoute le nouveau utilisateur
    $data[$key][] = $newTask;
    // pour qu'il retuourne le ficher en string(donneé)
    $fileNameData = json_encode($data);
    // et on retour les données en string
    file_put_contents(PATH_DB, $fileNameData);
}