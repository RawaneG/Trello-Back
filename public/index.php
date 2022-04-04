<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    //inclusion des chemins absolus
    require_once dirname(dirname(__FILE__)).'/config/constantes.php';
    //inclusion du convertisseur
    require_once dirname(dirname(__FILE__))."/config/orm.php";
    //Chargement du router
    require_once dirname(dirname(__FILE__))."/config/router.php";
