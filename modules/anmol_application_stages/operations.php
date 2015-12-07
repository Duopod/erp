<?php

// custom/modules/Leads/check_mobile.php
require_once('include/SugarPHPMailer.php');

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class operations
{

    public function operations($bean, $event, $arguments)
    {

        $id = $bean->id;
        $lead_name = $bean->fetched_rel_row['contacts_anmol_application_stages_1_name'];
        $application_name = $bean->fetched_rel_row['anmol_applicationss_anmol_application_stages_1_name'];
        // Get current data and time
        date_default_timezone_set('Asia/Calcutta');
        $date = date('d-m-Y');
        $time = date('H:i:s');

        if ($bean->application_stage_c == 'pendency_stage_0' && $bean->app_sent_to_uni_c != "1") {

            // Get pendency remark at stage 1
            $pendency_remark = $bean->pendency_stage_0_c;
            $pendency_subject = $bean->pendency_stage_0_subject_c;
            // update the counsellor with the remark
            // Put the value in a dummy field to send to the Tasks Module
            $bean->pendency_stage_0_dummy_c = "Pendency: " . $pendency_remark;
            $bean->pendency_stage_0_subject_du__c = "Pendency(Stage 0): " . $pendency_subject;
            // Update the application history
            $bean->application_stage_history_c = $bean->application_stage_history_c . " >> <b style = \"color:red;\">Date:</b> " . $date . " <b style=\"color:red;\">Time:</b> " . $time . ">> <b style=\"color:blue;\"> Application has pendency on Stage 0</b>: " . $pendency_subject . ": " . $pendency_remark . "<br>";

            $bean->pendency_stage_0_c = ""; // Clear the field
            $bean->pendency_stage_0_subject_c = ""; // Clear the field


        }

        if ($bean->application_stage_c == 'stage_1' && $bean->app_sent_to_uni_c != "1") {


            // Prevent the Application to be sent again.
            $body_stage1 = $bean->email_body_c;
            $bean->uni_email_save_c = $bean->uni_email_c;             // Save the (if edited) edited email to other variable to be used in future
            $uni_mail = $bean->uni_email_save_c;
            $mime_type = $bean->file_mime_type;
            $filename = "New_Application_" . $application_name . ".zip";
            $file_location = "/home/admin/web/siecindia.com/public_html/upload/" . $id;
            $subject = "SIEC Education " . $bean->email_subject_c . " " . $application_name;

            $body = $body_stage1;
            $email = $uni_mail;
            //Create Object New email
            $emailObj = new Email();
            $defaults = $emailObj->getSystemDefaultEmail();
            $mail = new SugarPHPMailer();
            $mail->setMailerForSystem();
            $mail->From = $defaults['email'];
            $mail->FromName = $defaults['name'];
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->prepForOutbound();
            $name_to = "University";
            $copy_to_email = "andy228448@gmail.com";
            $mail->AddCC($copy_to_email);
            $mail->AddAddress($email, $name_to);
            $mail->AddAttachment($file_location, $filename, 'base64', $mime_type);
            @$mail->Send();

            // Moving the file to the new location

            //Get a Unique No
            $unq_extension = uniqid();

            echo $file_name = preg_replace('/[^A-Za-z0-9]/', '_', $application_name) . "_" . $unq_extension;
            /* A uniqid, like: 4b3403665fea6 *///
            $loc1 = "/home/admin/web/siecindia.com/public_html/upload/" . $bean->id;
            $loc2 = "/home/admin/web/siecindia.com/public_html/custom/uploads/outbound/stage1/apps/" . $file_name . ".zip";


            $success = rename($loc1, $loc2);
            // If Something goes wrong
            if ($success != "1") {
                die("Something is wrong with file uploading! Please contact your Administrator");
            } else {
                $bean->filename = ""; // Reset the Upload Button
            }


            $bean->app_sent_to_uni_c = "1";
            // Add Comment in App Stage History that the application has been Forwarded.


            $bean->application_stage_history_c = $bean->application_stage_history_c . " >> <b style = \"color:red;\">Date:</b> " . $date . " <b style=\"color:red;\">Time:</b> " . $time . ">> <b style=\"color:blue;\"> Application Forwarded to University on Email: </b>" . $bean->uni_email_c . " <a href=\'" . $loc2 . "\'>View File</a><br>";
            // Send Application to Universityuni_email_c

            // Get the email of the University from the University Module.
        }

        if ($bean->application_stage_c == 'pendency_stage_1') {
            // Add remark box appears, remark to be added by application team -<< done
// Get pendency remark at stage 1
            $pendency_remark1 = $bean->pendency_stage_1_c;
            $pendency_subject1 = $bean->pendency_stage_1_subject_c;

            $bean->pendency_stage_1_dummy_c = "Pendency: " . $pendency_remark1;
            $bean->pendency_stage_1_subject_du_c = "Pendency (Stage 1): " . $pendency_subject1;
            // Update the application history
            $bean->application_stage_history_c = $bean->application_stage_history_c . "</br>>> <b style=\"color:red;\">Date:</b> " . $date . " <b style=\"color:red;\">Time:</b> " . $time . ">> <b style=\"color:blue;\"> Application has pendency on Stage 1</b>: " . $pendency_subject1 . ": " . $pendency_remark1 . "<br>";
            // The notification gets sent to the counsellor as an email about the remark -<< done
            $bean->pendency_stage_1_c = ""; // Clear the field
            $bean->pendency_stage_1_subject_c = ""; // Clear the field
            $bean->pendency_state_c = "1";

        }

        // If Pendency document is forwarded to University at Stage 1
        if ($bean->application_stage_c == 'pendency_stage_1_update_to_uni') {
            // Add remark box appears, remark to be added by application team -<< done
            // Get Pendency remark at stage 1

            // Prevent the Application to be sent again.
            $subject_stage1 = "SIEC Education >> Pendency Update " . $bean->email_subject_c . " " . $application_name;
            $body_stage1 = $bean->email_body_c;
            $mime_type = $bean->file_mime_type;
            $filename = "Pendency_Update_Stage1_" . $application_name . ".zip";
            $file_location = "/home/admin/web/siecindia.com/public_html/upload/" . $id;
            $subject = $subject_stage1;
            $body = $body_stage1;
            $email = $bean->uni_email_save_c;
            //Create Object New email
            $emailObj = new Email();
            $defaults = $emailObj->getSystemDefaultEmail();
            $mail = new SugarPHPMailer();
            $mail->setMailerForSystem();
            $mail->From = $defaults['email'];
            $mail->FromName = $defaults['name'];
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->prepForOutbound();
            $name_to = "University";
            $copy_to_email = "andy228448@gmail.com";
            $mail->AddCC($copy_to_email);
            $mail->AddAddress($email, $name_to);
            $mail->AddAttachment($file_location, $filename, 'base64', $mime_type);
            @$mail->Send();

            // Moving the file to the new location


            //Get a Unique No
            $unq_extension = uniqid();

            echo $file_name = preg_replace('/[^A-Za-z0-9]/', '_', $application_name) . "_" . $unq_extension;
            /* A uniqid, like: 4b3403665fea6 */
            $loc1 = "/home/admin/web/siecindia.com/public_html/upload/" . $bean->id;
            $loc2 = "/home/admin/web/siecindia.com/public_html/custom/uploads/outbound/stage1/pendencies/" . $file_name . ".zip";


            $success = rename($loc1, $loc2);
            // If Something goes wrong
            if ($success != "1") {
                die("Something is wrong! Please contact your Administrator");
            } else {
                $bean->filename = ""; // Reset the Upload Button
            }

// Sent Email


            //  $bean->app_sent_to_uni_c = "11";
            $bean->application_stage_history_c = $bean->application_stage_history_c . "</br>>> <b style=\"color:red;\">Date:</b> " . $date . " <b style=\"color:red;\">Time:</b> " . $time . ">> <b style=\"color:blue;\"> Pendency Updated to University: " . " <a href=\'" . $loc2 . "\'>View File</a><br>";


        }

        if ($bean->application_stage_c == 'uncon_offer') {
            // Add remark box appears, remark to be added by application team -<< done
// Get pendency remark at stage 1
            //Get a Unique No
            $unq_extension = uniqid();

            $file_name = preg_replace('/[^A-Za-z0-9]/', '_', $application_name) . "_" . $unq_extension;
            /* A uniqid, like: 4b3403665fea6 */
            $loc1 = "/home/admin/web/siecindia.com/public_html/upload/" . $bean->id;
            $loc2 = "/home/admin/web/siecindia.com/public_html/custom/uploads/inbound/stage1/uc_offer_letters/" . $file_name . ".zip";

            $success = rename($loc1, $loc2);
            // If Something goes wrong
            if ($success != "1") {
                die("Something is wrong! Please contact your Administrator");
            } else {
                $bean->filename = ""; // Reset the Upload Button
            }


            $bean->app_sent_to_uni_c = "11";
            $bean->application_stage_history_c = $bean->application_stage_history_c . ">>" . ">> <b style=\"color:red;\">Date:</b> " . $date . " <b style=\"color:red;\">Time:</b> " . $time . ">> <b style=\"color:blue;\"> Unconditional Offer Letter Recieved!" . " <a href=\'" . $loc2 . "\'>View File</a><br>";


        }

        if ($bean->application_stage_c == 'con_offer') {
            // Add remark box appears, remark to be added by application team -<< done
// Get pendency remark at stage 1

            //Get a Unique No
            $unq_extension = uniqid();

            $file_name = preg_replace('/[^A-Za-z0-9]/', '_', $application_name) . "_" . $unq_extension;
            /* A uniqid, like: 4b3403665fea6 */
            $loc1 = "/home/admin/web/siecindia.com/public_html/upload/" . $bean->id;
            $loc2 = "/home/admin/web/siecindia.com/public_html/custom/uploads/inbound/stage1/c_offer_letters/" . $file_name . ".zip";

            $success = rename($loc1, $loc2);
            // If Something goes wrong
            if ($success != "1") {
                die("Something is wrong! Please contact your Administrator");
            } else {
                $bean->filename = ""; // Reset the Upload Button
            }

            $bean->app_sent_to_uni_c = "12";
            $bean->application_stage_history_c = $bean->application_stage_history_c . ">>" . ">> <b style=\"color:red;\">Date:</b> " . $date . " <b style=\"color:red;\">Time:</b> " . $time . ">> <b style=\"color:blue;\"> Conditional Offer Letter Recieved!" . " <a href=\'" . $loc2 . "\'>View File</a><br>";


        }

        if ($bean->application_stage_c == 'rej_on_stage_1') {
            // Add remark box appears, remark to be added by application team -<< done
            // Get pendency remark at stage 1

            //Get a Unique No

            $bean->application_stage_history_c = $bean->application_stage_history_c . ">>" . ">> <b style=\"color:red;\">Date:</b> " . $date . " <b style=\"color:red;\">Time:</b> " . $time . ">> <b style=\"color:blue;\">Application Rejected by University</b><br>";


        }

        if ($bean->application_stage_c == 'rej_on_stage_1_by_student') {
            // Add remark box appears, remark to be added by application team -<< done
// Get pendency remark at stage 1


            $bean->application_stage_history_c = $bean->application_stage_history_c . ">>" . ">> <b style=\"color:red;\">Date:</b> " . $date . " <b style=\"color:red;\">Time:</b> " . $time . ">> <b style=\"color:blue;\">Application Rejected by Student</b><br>";


        }


        if ($bean->application_stage_c == 'stage_2') {
            // Add remark box appears, remark to be added by application team -<< done
            // Get pendency remark at stage 1
            $body_stage1 = $bean->email_body_stage2_c;


            $mime_type = $bean->file_mime_type;
            $filename = "Application_Finance_Docs_Stage2_" . $application_name . ".zip";
            $file_location = "/home/admin/web/siecindia.com/public_html/upload/" . $id;
            $subject = "SIEC Education: Financial Documents " . $bean->email_subject_c . " " . $application_name;

            $body = $body_stage1;
            $email = $bean->uni_email_save_c;
            //Create Object New email
            $emailObj = new Email();
            $defaults = $emailObj->getSystemDefaultEmail();
            $mail = new SugarPHPMailer();
            $mail->setMailerForSystem();
            $mail->From = $defaults['email'];
            $mail->FromName = $defaults['name'];
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->prepForOutbound();
            $name_to = "University";
            $copy_to_email = "andy228448@gmail.com";
            $mail->AddCC($copy_to_email);
            $mail->AddAddress($email, $name_to);
            $mail->AddAttachment($file_location, $filename, 'base64', $mime_type);
            @$mail->Send();

            // Moving the file to the new location

            //Get a Unique No
            $unq_extension = uniqid();

            echo $file_name = preg_replace('/[^A-Za-z0-9]/', '_', $application_name) . "_" . $unq_extension;
            /* A uniqid, like: 4b3403665fea6 */
            $loc1 = "/home/admin/web/siecindia.com/public_html/upload/" . $bean->id;
            $loc2 = "/home/admin/web/siecindia.com/public_html/custom/uploads/outbound/stage2/financials/" . $file_name . ".zip";


            $success = rename($loc1, $loc2);
            // If Something goes wrong
            if ($success != "1") {
                die("Something is wrong! Please contact your Administrator");
            } else {
                $bean->filename = ""; // Reset the Upload Button
            }


            $bean->app_sent_to_uni_c = "2";
            $bean->application_stage_history_c = $bean->application_stage_history_c . ">>" . ">> <b style=\"color:red;\">Date:</b> " . $date . " <b style=\"color:red;\">Time:</b> " . $time . ">> <b style=\"color:blue;\"> Financials Forwarded to University" . " <a href=\'" . $loc2 . "\'>View File</a><br>";


        }

        if ($bean->application_stage_c == 'pendency_stage_2') {
            // Add remark box appears, remark to be added by application team -<< done
// Get pendency remark at stage 1
            $pendency_remark2 = $bean->pendency_stage_2_c;
            $pendency_subject2 = $bean->pendency_stage_2_subject_c;

            $bean->pendency_stage_2_dummy_c = "Pendency: " . $pendency_remark2;
            $bean->pendency_stage_2_subject_du_c = "Pendency (Stage 1): " . $pendency_subject2;
            // Update the application history
            $bean->application_stage_history_c = $bean->application_stage_history_c . "</br>>> <b style=\"color:red;\">Date:</b> " . $date . " <b style=\"color:red;\">Time:</b> " . $time . ">> <b style=\"color:blue;\"> Application has pendency on Stage 1</b>: " . $pendency_subject2 . ": " . $pendency_remark2 . "<br>";
            // The notification gets sent to the counsellor as an email about the remark -<< done
            $bean->pendency_stage_2_c = ""; // Clear the field
            $bean->pendency_stage_2_subject_c = ""; // Clear the field
            // $bean->pendency_state_c = "1";

        }

        if ($bean->application_stage_c == 'pendency_stage_2_update_to_uni') {
            // Add remark box appears, remark to be added by application team -<< done
            // Get Pendency remark at stage 1

            // Prevent the Application to be sent again.
            $subject_stage1 = "SIEC Education >> Pendency Update Financials " . $bean->email_subject_c . " " . $application_name;
            $body_stage1 = $bean->email_body_c;
            $mime_type = $bean->file_mime_type;
            $filename = "Pendency_Update_Stage1_" . $application_name . ".zip";
            $file_location = "/home/admin/web/siecindia.com/public_html/upload/" . $id;
            $subject = $subject_stage1;
            $body = $body_stage1;
            $email = $bean->uni_email_save_c;
            //Create Object New email
            $emailObj = new Email();
            $defaults = $emailObj->getSystemDefaultEmail();
            $mail = new SugarPHPMailer();
            $mail->setMailerForSystem();
            $mail->From = $defaults['email'];
            $mail->FromName = $defaults['name'];
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->prepForOutbound();
            $name_to = "University";
            $copy_to_email = "andy228448@gmail.com";
            $mail->AddCC($copy_to_email);
            $mail->AddAddress($email, $name_to);
            $mail->AddAttachment($file_location, $filename, 'base64', $mime_type);
            @$mail->Send();

            // Moving the file to the new location


            //Get a Unique No
            $unq_extension = uniqid();

            echo $file_name = preg_replace('/[^A-Za-z0-9]/', '_', $application_name) . "_" . $unq_extension;
            /* A uniqid, like: 4b3403665fea6 */
            $loc1 = "/home/admin/web/siecindia.com/public_html/upload/" . $bean->id;
            $loc2 = "/home/admin/web/siecindia.com/public_html/custom/uploads/outbound/stage2/pendencies/" . $file_name . ".zip";


            $success = rename($loc1, $loc2);
            // If Something goes wrong
            if ($success != "1") {
                die("Something is wrong! Please contact your Administrator");
            } else {
                $bean->filename = ""; // Reset the Upload Button
            }

// Sent Email


            //  $bean->app_sent_to_uni_c = "11";
            $bean->application_stage_history_c = $bean->application_stage_history_c . "</br>>> <b style=\"color:red;\">Date:</b> " . $date . " <b style=\"color:red;\">Time:</b> " . $time . ">> <b style=\"color:blue;\">Financial Pendency Updated to University: " . " <a href=\'" . $loc2 . "\'>View File</a><br>";


        }


        if ($bean->application_stage_c == 'coe') {
            // Add remark box appears, remark to be added by application team -<< done
// Get pendency remark at stage 1
            //Get the Extension
            //Get a Unique No
            $unq_extension = uniqid();

            $file_name = preg_replace('/[^A-Za-z0-9]/', '_', $application_name) . "_" . $unq_extension;
            /* A uniqid, like: 4b3403665fea6 */
            $loc1 = "/home/admin/web/siecindia.com/public_html/upload/" . $bean->id;
            $loc2 = "/home/admin/web/siecindia.com/public_html/custom/uploads/inbound/stage1/coe/" . $file_name . ".zip";

            $success = rename($loc1, $loc2);
            // If Something goes wrong
            if ($success != "1") {
                die("Something is wrong! Please contact your Administrator");
            } else {
                $bean->filename = ""; // Reset the Upload Button
            }


            $bean->app_sent_to_uni_c = "3";
            $bean->application_stage_history_c = $bean->application_stage_history_c . ">>" . ">> <b style=\"color:red;\">Date:</b> " . $date . " <b style=\"color:red;\">Time:</b> " . $time . ">> <b style=\"color:blue;\"> COE Recieved" . " <a href=\'" . $loc2 . "\'>View File</a><br>";


        }
    }

}

// Latest Commit