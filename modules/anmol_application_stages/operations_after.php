<?php

// custom/modules/Leads/check_mobile.php
require_once('include/SugarPHPMailer.php');

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class operations_after
{

    public function operations_after($bean, $event, $arguments)
    {
        //print_r($bean);
        //  echo $bean->rel_fields_before_value['anmol_appl021dationss_ida'];
        //die;
        ///// Create a task - Reminder Automatically
        if ($bean->application_stage_c == "pendency_stage_0") {
            $n = new Task();
            $n->name = $bean->pendency_stage_0_subject_du__c;
            $n->description = $bean->pendency_stage_0_subject_du__c;
            $n->contact_id = $bean->contacts_anmol_application_stages_1contacts_ida;
            $n->anmol_applicationss_tasks_1anmol_applicationss_ida = $bean->rel_fields_before_value['anmol_appl021dationss_ida'];
            $n->assigned_user_id = $bean->assigned_user_id;
            $n->save();
        }

        if ($bean->application_stage_c == "pendency_stage_1") {
            $n = new Task();
            $n->name = $bean->pendency_stage_1_subject_du_c;
            $n->description = $bean->pendency_stage_1_subject_du_c;

            $n->contact_id = $bean->contacts_anmol_application_stages_1contacts_ida;
            $n->anmol_applicationss_tasks_1anmol_applicationss_ida = $bean->rel_fields_before_value['anmol_appl021dationss_ida'];
            $n->assigned_user_id = $bean->assigned_user_id;
            $n->save();
        }

        if ($bean->application_stage_c == "uncon_offer") {
            $n = new Task();
            $n->name = "Unconditional Offer Letter Recieved";
            $n->contact_id = $bean->contacts_anmol_application_stages_1contacts_ida;
            $n->anmol_applicationss_tasks_1anmol_applicationss_ida = $bean->rel_fields_before_value['anmol_appl021dationss_ida'];
            $n->assigned_user_id = $bean->assigned_user_id;
            $n->save();
        }

        if ($bean->application_stage_c == "con_offer") {
            $n = new Task();
            $n->name = "Conditional Offer Letter Recieved";
            $n->contact_id = $bean->contacts_anmol_application_stages_1contacts_ida;
            $n->anmol_applicationss_tasks_1anmol_applicationss_ida = $bean->rel_fields_before_value['anmol_appl021dationss_ida'];
            $n->assigned_user_id = $bean->assigned_user_id;
            $n->save(); ///
        }

        if ($bean->application_stage_c == "rej_on_stage_1") {
            $n = new Task();
            $n->name = "Application Rejected by University";
            $n->contact_id = $bean->contacts_anmol_application_stages_1contacts_ida;
            $n->anmol_applicationss_tasks_1anmol_applicationss_ida = $bean->rel_fields_before_value['anmol_appl021dationss_ida'];
            $n->assigned_user_id = $bean->assigned_user_id;
            $n->save();
        }

        if ($bean->application_stage_c == "rej_on_stage_2") {
            $n = new Task();
            $n->name = "Financials Rejected by University";
            $n->contact_id = $bean->contacts_anmol_application_stages_1contacts_ida;
            $n->anmol_applicationss_tasks_1anmol_applicationss_ida = $bean->rel_fields_before_value['anmol_appl021dationss_ida'];
            $n->assigned_user_id = $bean->assigned_user_id;
            $n->save();
        }

        if ($bean->application_stage_c == "pendency_stage_2") {
            $n = new Task();
            $n->name = $bean->pendency_stage_2_subject_du_c;
            $n->description = $bean->pendency_stage_2_subject_du_c;

            $n->contact_id = $bean->contacts_anmol_application_stages_1contacts_ida;
            $n->anmol_applicationss_tasks_1anmol_applicationss_ida = $bean->rel_fields_before_value['anmol_appl021dationss_ida'];
            $n->assigned_user_id = $bean->assigned_user_id;
            $n->save();
        }

        if ($bean->application_stage_c == "coe") {
            $n = new Task();
            $n->name = "COE Recieved";
            $n->contact_id = $bean->contacts_anmol_application_stages_1contacts_ida;
            $n->anmol_applicationss_tasks_1anmol_applicationss_ida = $bean->rel_fields_before_value['anmol_appl021dationss_ida'];
            $n->assigned_user_id = $bean->assigned_user_id;
            $n->save();
        }

    }

}

//