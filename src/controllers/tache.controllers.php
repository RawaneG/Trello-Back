<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    if(isset($_REQUEST['action']))
    {
        if($_REQUEST['action'] == 'ajouter')
        {
            $data = json_decode(file_get_contents('php://input'),true);
            array_to_json('Etat',$data);
        }   
    }
}
