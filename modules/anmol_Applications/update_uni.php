<?php

// custom/modules/Leads/check_mobile.php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class update_uni
{

    public function uni($bean, $event, $arguments)
    {

        $course_name = $bean->anmol_course_search_anmol_applications_1_name;
        $id = $bean->id;
//$created_by = $bean->created_by;
//echo "id of record youre savin: ";
//echo $id;
        $sql = "SELECT * FROM anmol_course_search_anmol_applications_1_c WHERE anmol_course_search_anmol_applications_1anmol_applications_idb = '$id'";

        $results = $GLOBALS['db']->query($sql);

        while ($row = $GLOBALS['db']->fetchByAssoc($results)) {
            //Use $row['id'] to grab the id fields value
            $course_id = $row['anmol_course_search_anmol_applications_1anmol_course_search_ida']; // got the unique course id


            $sql_2 = "SELECT * FROM anmol_university_list_anmol_course_search_1_c WHERE anmol_univ3827_search_idb = '$course_id'";

            $results2 = $GLOBALS['db']->query($sql_2);

            while ($row2 = $GLOBALS['db']->fetchByAssoc($results2)) {
                $university_id = $row2['anmol_univf5d9ty_list_ida'];

            }

            $sql_3 = "SELECT * FROM anmol_university_list WHERE id = '$university_id'";

            $results3 = $GLOBALS['db']->query($sql_3);

            while ($row3 = $GLOBALS['db']->fetchByAssoc($results3)) {
                $university_name = $row3['name'];

            }

//echo $university_name;

            $bean->uni_name_c = $university_name;
            $bean->name = "Application created for **" . $university_name . "** for Course **" . $course_name . "**";

            //die('.');

        }
    }

}
