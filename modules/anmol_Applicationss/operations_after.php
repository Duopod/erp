<?php

// custom/modules/Leads/check_mobile.php
require_once('include/SugarPHPMailer.php');

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class operations_after1
{

    public function operations_after1($bean, $event, $arguments)
    {
        // Create Application Stage Automatically
        // print_r($bean);
        //   echo $bean->id;
        //    print_r($bean);
        //   echo $bean->contacts_anmol_applicationss_1contacts_ida;

        $n = new anmol_application_stages();
        $n->name = "Stage 0";
        $n->unchecked_docs_c = $bean->unchecked_docs_c;
        $n->assigned_user_id = $bean->assigned_user_id;
        $n->contacts_anmol_application_stages_1contacts_ida = $bean->testf_c;
        //   $n->anmol_applicationss_tasks_1anmol_applicationss_ida = "c66d4a92-827b-2369-6b55-5601beea10a8";
        $n->save();

        $bean->load_relationship('anmol_applicationss_anmol_application_stages_1');
        $bean->anmol_applicationss_anmol_application_stages_1->add($n->id, array());
        //  die;
        //  $bean->load_relationship('anmol_application_stages_assigned_user');
        //  $bean->anmol_application_stages_assigned_user->add($bean->assigned_user_id, array());

        /////////////


    }

}
