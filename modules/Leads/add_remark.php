<?php

// custom/modules/Leads/add_branch.php This hook adds the branch automatically to the Lead.

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class add_remark
{

    public function addremark($bean, $event, $arguments)
    {
        //print_r($_SESSION);die;

        global $current_user;

        $created_by_id = $current_user->id; //Get Current User Id


        $sql = "SELECT * FROM users WHERE id = '$created_by_id'";

        $results = $GLOBALS['db']->query($sql);

        while ($row = $GLOBALS['db']->fetchByAssoc($results)) {
            //Use $row['id'] to grab the id fields value
            $first_name = $row['first_name']; //
            $last_name = $row['last_name']; //
            $user_full_name = $first_name . " " . $last_name;
        }


        //////////////////////////////////////////////////////////////////////////////////////
        //$created_by_id = $bean->created_by;
        $remark = $bean->lead_remark_c; // fetch the remark from the page
        $bean->lead_remark_c = ""; // empty the remark box
        $remark_saver_box = $bean->remark_history_c; //pull out any content from remark saver box
        date_default_timezone_set('Asia/Calcutta');
        $date = date('d-m-Y');
        // echo $date;
        $time = date('H:i:s');
        ////	echo $time;die;
        //	die($date." ".$time);
        $follow_up_date = $bean->follow_up_date_c;
        if ($remark_saver_box == "") // If remark saver box is empty
        {
            $bean->remark_history_c = "<b style=\"color:red;\">Date:</b> " . $date . " <b style=\"color:red;\">Time:</b> " . $time . " <b style=\"color:green;\">" . $user_full_name . "</b>: " . $remark . " <b style=\"color:blue;\">Follow up on:</b> " . $follow_up_date; // append the remark to remark saver box
        }
        if ($remark_saver_box != "") // If remark saver box is not empty
        {
            $bean->remark_history_c = $remark_saver_box . "</br></br>" . "<b style=\"color:red;\">Date:</b> " . $date . " <b style=\"color:red;\">Time:</b> " . $time . " <b style=\"color:green;\">" . $user_full_name . "</b>: " . $remark . " <b style=\"color:blue;\">Follow up on:</b> " . $follow_up_date; // append the remark to remark saver box
        }
    }

}
