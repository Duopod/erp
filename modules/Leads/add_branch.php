<?php

// custom/modules/Leads/add_branch.php This hook adds the branch automatically to the Lead.

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class add_branch
{

    public function addbranch($bean, $event, $arguments)
    {

        $created_by_id = $bean->created_by; // fetch user id from database

        $sql = "SELECT * FROM fp_event_locations_users_1_c WHERE fp_event_locations_users_1users_idb = '$created_by_id'";

        $results = $GLOBALS['db']->query($sql);

        while ($row = $GLOBALS['db']->fetchByAssoc($results)) {
            //Use $row['id'] to grab the id fields value
            $branch_id = $row['fp_event_locations_users_1fp_event_locations_ida']; //fetch associated branch a.k.a Fp_events_locations id from DB
// [fp_event_locations_leads_1_name] => New Delhi - JP
            ///[fp_event_locations_leads_1fp_event_locations_ida] => 51a2c5b1-79b6-abec-d570-55e0cb9848b2

//echo "Branch id: ";
//echo $branch_id;

//$test=$bean->fp_event_locations_leads_1fp_event_locations_ida;
//die($branch_id." ".$bean->fp_event_locations_leads_1fp_event_locations_ida);

            $bean->rel_fields_before_value['fp_event_locations_leads_1_name'] = "New Delhi - JP";
            $bean->rel_fields_before_value['fp_event_locations_leads_1fp_event_locations_ida'] = $branch_id;
            $bean->fetched_rel_row['fp_event_locations_leads_1_name'] = "New Delhi - JP";
            $bean->fp_event_locations_leads_1_name = "New Delhi - JP";
            $bean->fp_event_locations_leads_1fp_event_locations_ida = $branch_id;

            //echo "<br>";

            /*$sql_2 = "SELECT * FROM fp_event_locations WHERE id = '$branch_id'";

            $results2 = $GLOBALS['db']->query($sql_2);

            while($row2 = $GLOBALS['db']->fetchByAssoc($results2) )
            {
                //Use $row['id'] to grab the id fields value
                $branch_name= $row2['name'];         //Fetch Branch Name

                echo "Branch name: ";
            echo $branch_name;
              echo "<br>";

            }*/


            // die('.');


        }


    }

}
