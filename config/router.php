<?php
if(isset($_REQUEST['controller']))
{
    switch ($_REQUEST['controller'])
    {
        case "tache" :
        require_once(PATH_SRC."controllers/tache.controllers.php");
        break;
    }
}
else
{
    require_once(PATH_SRC."controllers/tache.controllers.php");
}