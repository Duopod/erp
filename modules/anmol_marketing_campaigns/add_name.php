<?php
require_once('include/utils.php');

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class add_name
{

    public function addname($bean, $event, $arguments)
    {

        // $fieldname = 'campaign_type_c';
        //  $displayFieldValue = $GLOBALS['campaign_type_list'][$bean->field_defs[$fieldname]['options'][$bean->$fieldname]];
        //  die;

        //die($displayFieldValue);

        $name_of_event = $bean->name_of_event_c;
        $event_name = $bean->campaign_type_c;
        $campaign_type = translate('campaign_type_list', '', $event_name);

        $bean->name = $campaign_type . ": " . $name_of_event;


    }
}


