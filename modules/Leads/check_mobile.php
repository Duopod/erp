<?php

// custom/modules/Leads/check_mobile.php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class check_mobile
{

    public function check($bean, $event, $arguments)
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
            } elseif ($id2 != $id) {

                // Now send a text Message if number not present

                //create a new cURL resource
                $ch = curl_init();
                // set URL and other appropriate options
                curl_setopt($ch, CURLOPT_URL, "http://bhashsms.com/api/sendmsg.php?user=SIEC&pass=siec@@*$$*&sender=SiecIN&phone={$mobile_phone}&text=Hi%20*First%20Name*%2C%0AWelcome%20to%20SIEC.%20Please%20leave%20your%20feedback%20on%3A%20http%3A%2F%2Fsiecindia.com%2Ffeedback%0AThank%20You.&priority=sdnd&stype=normal");
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                //grab URL and pass it to the browser
                $response = curl_exec($ch);// close cURL resource, and free up system resources
                curl_close($ch);
                die;
            }

        }


        // Check if Follow up date not less than today's date
        //   print_r($bean);
        //   die;
        /*    $_follow_up_date = $bean->follow_up_date_c . "<br>";
            $_lead_status = $bean->status . "<br>";
            $_lead_score = $bean->lead_score_c;
            date_default_timezone_set('Asia/Calcutta');
            $date = date('Y-m-d H:i:s');
            // echo $date;


            if ($_lead_score == "hot_lead" || $_lead_score == "warm_lead") {

                if ($_lead_status != "Converted") {

                    // compare the set follow up date and todays date
                    // if set follow up date us less than todays date error
                    if ($_follow_up_date < $date) {
                        echo "<b>SIEC Tip: Nope you cant set the follow up date in the past unless you have a Time . Try Again</b>";
                        die;
                    }

                }

            }*/


    }

}
