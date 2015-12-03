<?php

// custom/modules/Leads/check_mobile.php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class redirect
{

    public function redirect($bean, $event, $arguments)
    {
        $application_id = $bean->id;

        header("Location: http://localhost/suitecrm/index.php?action=ajaxui#ajaxUILoc=index.php?module=anmol_Applications&action=DetailView&record={$application_id}");


        echo "New Application Has been Created.</br>";

        echo "Click <a href='http://localhost/suitecrm/index.php?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3Danmol_Applications%26action%3DDetailView%26record%3D{$application_id}'>here</a> to upload Documents.";


    }
}   


