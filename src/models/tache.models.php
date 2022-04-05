<?php
if($_SERVER['REQUEST_METHOD'] == "GET")
{
    if(isset($_REQUEST['action']))
    {
        if($_REQUEST['action'] == 'restauration')
        {
            echo findStates();
        }   
    }
}
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    if(isset($_REQUEST['action']))
    {
        if($_REQUEST['action'] == 'ajouter')
        {
            $data = json_decode(file_get_contents('php://input'),true);
            $actual_time = date("Y-m-d");
            addEtat($actual_time,$data);
        }   
    }
}
