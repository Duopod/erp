<?php

// custom/modules/Leads/check_mobile.php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class send_email
{

    public function send($bean, $event, $arguments)
    {

        $mobile_phone = $bean->phone_mobile;
        $id = $bean->id;
        $created_by = $bean->created_by;
//echo "id of record youre savin: ";
//echo $id;
        $sql = "SELECT * FROM leads WHERE phone_mobile = '$mobile_phone'";

        $results = $GLOBALS['db']->query($sql);

        while ($row = $GLOBALS['db']->fetchByAssoc($results)) {
            //Use $row['id'] to grab the id fields value
            $phone_mobile2 = $row['phone_mobile'];
            $id2 = $row['id'];
            $deleted1 = $row['deleted'];

            //  echo "<br/>id fetched from DB: ";
            //  echo $id2;
            if ($mobile_phone == $phone_mobile2 && $id2 != $id && $deleted1 == '0') {
                echo "</br>The contact number ";

                echo $phone_mobile;
                echo " is already in the database!<br/>";
                echo "<a href='http://crm.siecindia.com/index.php?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3DLeads%26action%3Dindex'>Click Here to Go Back</a>";
                echo "<br/><a href='http://crm.siecindia.com/index.php?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3DLeads%26action%3DEditView%26return_module%3DLeads%26return_action%3DDetailView
'>Click Here to Create a New Lead</a>";


                $sql_2 = "SELECT * FROM users WHERE id = '$created_by'";

                $results2 = $GLOBALS['db']->query($sql_2);

                while ($row2 = $GLOBALS['db']->fetchByAssoc($results2)) {
                    //Use $row['id'] to grab the id fields value
                    $first_name = $row2['first_name'];
                    $last_name = $row2['last_name'];

                    echo "</br>To follow-up on the lead please contact: <br/>" . $first_name . " " . $last_name;

                    die('.');

                }


                die('.');
            } else {
            }

        }


    }

}
