<?php

function findStates()
{
    $dataJson = file_get_contents(PATH_DB);
    return $dataJson;
}

function addEtat($key,$newTask)
{
    $dataJson = file_get_contents(PATH_DB);
    $data = json_decode($dataJson,true);
    $data[$key][] = $newTask;
    $fileNameData = json_encode($data);
    file_put_contents(PATH_DB, $fileNameData);
}