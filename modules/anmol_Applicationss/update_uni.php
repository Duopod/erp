<?php

// custom/modules/Leads/check_mobile.php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class update_uni
{

    public function uni($bean, $event, $arguments)
    {
        // Alerts
        alert("Upload zip files only! Less than 9 MB");
// File Operations
        // Check File Size
        $f_size = $_FILES['filename_file']['size'];

        if ($f_size > 9000000) {
            die("File Size Should be less than 9MB");
        }
        // First check if the File is Selected or no
        $f_name = $bean->filename;

        if ($f_name == "") {
            die("Error: File not Selected!");
        };
        // Check File Extension Zip or No
        $f_extn = explode(".", $f_name);

        if ($f_extn[1] != "zip") {
            die("Error: Please Upload Zip Files Only!");
        }


        //**********************************************************
        $course_id = $bean->anmol_course_search_anmol_applicationss_2anmol_course_search_ida;
        $id = $bean->id;
        // die($id);
        //$student_id = $bean->contacts_anmol_applicationss_1contacts_ida;
        //die($student_id);

//$created_by = $bean->created_by;
//echo "id of record youre savin: ";
//echo $id;
        $sql = "SELECT * FROM anmol_course_search_anmol_applicationss_2_c WHERE anmol_course_search_anmol_applicationss_2anmol_applicationss_idb = '$id'";

        $results = $GLOBALS['db']->query($sql);

        while ($row = $GLOBALS['db']->fetchByAssoc($results)) {
            //Use $row['id'] to grab the id fields value
            $course_id = $row['anmol_course_search_anmol_applicationss_2anmol_course_search_ida']; // got the unique course id


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

// Get Course Name
            $sql_4 = "SELECT * FROM anmol_course_search WHERE id = '$course_id'";

            $results4 = $GLOBALS['db']->query($sql_4);

            while ($row4 = $GLOBALS['db']->fetchByAssoc($results4)) {
                $course_name = $row4['name'];

            }

            // Get Student id
            $sql_5 = "SELECT * FROM contacts_anmol_applicationss_1_c WHERE contacts_anmol_applicationss_1anmol_applicationss_idb = '$id'";

            $results5 = $GLOBALS['db']->query($sql_5);

            while ($row5 = $GLOBALS['db']->fetchByAssoc($results5)) {
                $student_id = $row5['contacts_anmol_applicationss_1contacts_ida'];

            }

            // Get Student Name
            $sql_6 = "SELECT * FROM contacts WHERE id = '$student_id'";

            $results6 = $GLOBALS['db']->query($sql_6);

            while ($row6 = $GLOBALS['db']->fetchByAssoc($results6)) {
                $student_first_name = $row6['first_name'];
                $student_last_name = $row6['last_name'];

            }
//echo $university_name;

            $bean->uni_name_c = $university_name;
            $bean->name = $student_first_name . " " . $student_last_name . " | " . $university_name . " | " . $course_name . "";

            //die('.');

        }
    }

}
