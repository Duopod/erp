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
        global $current_user;

        $created_by_id = $current_user->id;


        $sql = "SELECT * FROM fp_event_locations_users_1_c WHERE fp_event_locations_users_1users_idb = '$created_by_id'";

        $results = $GLOBALS['db']->query($sql);

        while ($row = $GLOBALS['db']->fetchByAssoc($results)) {
            //Use $row['id'] to grab the id fields value
            $branch_id = $row['fp_event_locations_users_1fp_event_locations_ida']; //fetch associated branch a.k.a Fp_events_locations id from DB


            $sql2 = "SELECT * FROM fp_event_locations WHERE id = '$branch_id'";

            $results2 = $GLOBALS['db']->query($sql2);

            while ($row2 = $GLOBALS['db']->fetchByAssoc($results2)) {
                //Use $row['id'] to grab the id fields value
                $branch_name = $row2['name'];
            }


        }
        ////////


        $n = new anmol_application_stages();
        $n->name = "Stage 0";
        $n->unchecked_docs_c = $bean->unchecked_docs_c;
        $n->assigned_user_id = $bean->assigned_user_id;
        $n->contacts_anmol_application_stages_1contacts_ida = $bean->testf_c;
        $n->fp_event_locations_anmol_application_stages_1_name = $branch_name;
        $n->fp_event_l5a9acations_ida = $branch_id;
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

