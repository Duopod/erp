<?php

// generic scripts

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class script
{

    public function script($event, $arguments)
    {


        ?>
        <script>
            (function ($) {
                $(document).ready(function () {


                    var name_get = "";
                    // Logic to Disable selectors
                    // Disable all
                    {
                        //1
                        $('#application_stage_c option[value="pendency_stage_1"]').attr("disabled", "true");
                        $('#application_stage_c option[value="pendency_stage_1_update_to_uni"]').attr("disabled", "true");
                        $('#application_stage_c option[value="uncon_offer"]').attr("disabled", "true");
                        $('#application_stage_c option[value="con_offer"]').attr("disabled", "true");
                        $('#application_stage_c option[value="rej_on_stage_1"]').attr("disabled", "true");
                        $('#application_stage_c option[value="rej_on_stage_1_by_student"]').attr("disabled", "true");

                        //2

                        $('#application_stage_c option[value="stage_2"]').attr("disabled", "true");

                        //3
                        $('#application_stage_c option[value="pendency_stage_2"]').attr("disabled", "true");
                        $('#application_stage_c option[value="coe"]').attr("disabled", "true");
                        $('#application_stage_c option[value="reg_on_stage_2"]').attr("disabled", "true");
                        $('#application_stage_c option[value="rej_on_stage_2_by_student"]').attr("disabled", "true");

                        $('#application_stage_c option[value="pendency_stage_2_update_to_uni"]').attr("disabled", "true");

                        //4
                        $('#application_stage_c option[value="applied_for_visa"]').attr("disabled", "true");
                    }
                    //


                    // Now if the Application has been sent to the uni, show the set 1 and disable rest
                    {
                        if ($('#app_sent_to_uni_c').val() == "1") {
                            $('#application_stage_c option[value="pendency_stage_1"]').removeAttr("disabled");
                            $('#application_stage_c option[value="uncon_offer"]').removeAttr("disabled");
                            $('#application_stage_c option[value="con_offer"]').removeAttr("disabled");
                            $('#application_stage_c option[value="rej_on_stage_1"]').removeAttr("disabled");
                            $('#application_stage_c option[value="rej_on_stage_1_by_student"]').removeAttr("disabled");


                            // Disable the top most one's
                            $('#application_stage_c option[value="pendency_stage_0"]').attr("disabled", "true");
                            $('#application_stage_c option[value="stage_0"]').attr("disabled", "true");
                            $('#application_stage_c option[value="stage_1"]').attr("disabled", "true");
                        }

                        // If Pendency is created at Stage 1 then enable the option Upload Pendency Doc
                        if ($('#pendency_state_c').val() == "1") {
                            $('#application_stage_c option[value="pendency_stage_1_update_to_uni"]').removeAttr("disabled");
                        }


                        // If UC Offer Letter is Recieved  // Show set 2
                        if ($('#app_sent_to_uni_c').val() == "11") {

                            $('#application_stage_c option[value="stage_2"]').removeAttr("disabled");


                            $('#application_stage_c option[value="pendency_stage_1"]').attr("disabled", "true");
                            $('#application_stage_c option[value="uncon_offer"]').attr("disabled", "true");
                            $('#application_stage_c option[value="con_offer"]').attr("disabled", "true");
                            $('#application_stage_c option[value="rej_on_stage_1"]').attr("disabled", "true");
                            $('#application_stage_c option[value="rej_on_stage_1_by_student"]').attr("disabled", "true");

                            // Disable the top most one's
                            $('#application_stage_c option[value="pendency_stage_0"]').attr("disabled", "true");
                            $('#application_stage_c option[value="stage_0"]').attr("disabled", "true");
                            $('#application_stage_c option[value="stage_1"]').attr("disabled", "true");
                        }

                        // If C Offer Letter is Recieved / Show set 2
                        if ($('#app_sent_to_uni_c').val() == "12") {
                            $('#application_stage_c option[value="stage_2"]').removeAttr("disabled");


                            $('#application_stage_c option[value="pendency_stage_1"]').attr("disabled", "true");
                            $('#application_stage_c option[value="uncon_offer"]').attr("disabled", "true");
                            $('#application_stage_c option[value="con_offer"]').removeAttr("disabled");
                            $('#application_stage_c option[value="rej_on_stage_1"]').attr("disabled", "true");
                            $('#application_stage_c option[value="rej_on_stage_1_by_student"]').attr("disabled", "true");

                            // Disable the top most one's
                            $('#application_stage_c option[value="pendency_stage_0"]').attr("disabled", "true");
                            $('#application_stage_c option[value="stage_0"]').attr("disabled", "true");
                            $('#application_stage_c option[value="stage_1"]').attr("disabled", "true");
                        }
                        // If Application is sent to uni i.e Stage 2 Show Set 3
                        if ($('#app_sent_to_uni_c').val() == "2") {


                            $('#application_stage_c option[value="pendency_stage_2"]').removeAttr("disabled");
                            $('#application_stage_c option[value="coe"]').removeAttr("disabled");
                            $('#application_stage_c option[value="reg_on_stage_2"]').removeAttr("disabled");
                            $('#application_stage_c option[value="rej_on_stage_2_by_student"]').removeAttr("disabled");

                            $('#application_stage_c option[value="pendency_stage_1"]').attr("disabled", "true");
                            $('#application_stage_c option[value="uncon_offer"]').attr("disabled", "true");
                            $('#application_stage_c option[value="con_offer"]').attr("disabled", "true");
                            $('#application_stage_c option[value="rej_on_stage_1"]').attr("disabled", "true");
                            $('#application_stage_c option[value="rej_on_stage_1_by_student"]').attr("disabled", "true");

                            $('#application_stage_c option[value="pendency_stage_1_update_to_uni"]').attr("disabled", "true");
                            // Disable the top most one's
                            $('#application_stage_c option[value="pendency_stage_0"]').attr("disabled", "true");
                            $('#application_stage_c option[value="stage_0"]').attr("disabled", "true");
                            $('#application_stage_c option[value="stage_1"]').attr("disabled", "true");
                        }

                        // If COE is uploaded then Apply for visa is enabled
                        if ($('#app_sent_to_uni_c').val() == "3") {

                            $('#application_stage_c option[value="applied_for_visa"]').removeAttr("disabled");


                            $('#application_stage_c option[value="pendency_stage_1"]').attr("disabled", "true");
                            $('#application_stage_c option[value="uncon_offer"]').attr("disabled", "true");
                            $('#application_stage_c option[value="con_offer"]').attr("disabled", "true");
                            $('#application_stage_c option[value="rej_on_stage_1"]').attr("disabled", "true");
                            $('#application_stage_c option[value="rej_on_stage_1_by_student"]').attr("disabled", "true");

                            // Disable the top most one's
                            $('#application_stage_c option[value="pendency_stage_0"]').attr("disabled", "true");
                            $('#application_stage_c option[value="stage_0"]').attr("disabled", "true");
                            $('#application_stage_c option[value="stage_1"]').attr("disabled", "true");
                        }
                    }


                    $("#assigned_user_name,#btn_assigned_user_name,#btn_clr_assigned_user_name,#anmol_applicationss_anmol_application_stages_1_name,#btn_anmol_applicationss_anmol_application_stages_1_name,#btn_clr_anmol_applicationss_anmol_application_stages_1_name,#app_sent_to_uni_c").attr("disabled", "true");
                    $('#filename_label').parent().css("display", "none");
                    $('#application_stage_history_c_label').parent().css("display", "none")
                    // Hide the Upload Box and the Email Fields


                    $('#uni_email_c_label').parent().css("display", "none");
                    $('#email_subject_c_label').parent().css("display", "none");
                    $('#email_body_c_label').parent().css("display", "none");

                    $('#email_subject_stage2_c_label').parent().css("display", "none");
                    $('#email_body_stage2_c_label').parent().css("display", "none");
                    // Hide Pendecy inputs
                    $('#pendency_stage_0_subject_c_label').parent().css("display", "none");
                    $('#pendency_stage_0_c_label').parent().css("display", "none");
                    $("#file_mime_type_label").parent().css("display", "none");
                    $('#pendency_state_c_label').parent().css("display", "none");

                    $('#pendency_stage_1_subject_c_label').parent().css("display", "none");
                    $('#pendency_stage_1_c_label').parent().css("display", "none");


                    // ***If change fxn

                    $("#application_stage_c").change(function () {


                        name_get = $('#application_stage_c  option:selected').text();
                        $('#name').attr("value", name_get);

                        // If selected pendency at stage 0
                        if ($("#application_stage_c").val() == "pendency_stage_0") {

                            alert("Application has a Pendency at stage 1! The Counsellor will be notified of the Pendency! Enter the Pendency in the Subject and the detail in the Body!");

                            // what to show
                            $('#pendency_stage_0_subject_c_label').parent().css("display", "table-row");
                            $('#pendency_stage_0_c_label').parent().css("display", "table-row");
                            $('#filename_label').parent().css("display", "none");

                            //what to hide
                            $('#filename_label').parent().css("display", "none");
                            $('#uni_email_c_label').parent().css("display", "none");
                            $('#email_subject_c_label').parent().css("display", "none");
                            $('#email_body_c_label').parent().css("display", "none");
                        }
                        else {
                            $('#pendency_stage_0_subject_c_label').parent().css("display", "none");
                            $('#pendency_stage_0_c_label').parent().css("display", "none");
                            $('#filename_label').parent().css("display", "none");

                        }


                        // If selected Stage 1 Sent application to Uni
                        $.first_time = true;
                        if ($("#application_stage_c").val() == "stage_1" && $('#app_sent_to_uni_c').val() == "") {


                            // Ajax and get Document Check list
                            $('#filename_file').after('<br><b>Please check and tally all the Documents below before proceeding<b>:<table class="chkbxtbl" style="text-align: center;"><tr class="chkbxpnl"><th></th><th>Document Name</th><th>Requirement</th></tr></table>');

                            // Checks if the Application is Manual Application
                            $.ajax({
                                url: "/anmol_applications_ajax_call/script_uni_email_application_stages.php",
                                type: "post", dataType: "JSON",
                                data: $('#anmol_appl021dationss_ida').serialize(),
                                success: function (data) {

                                    //   alert(data);
                                    if (data == null) {


                                        $('#uni_email_c').val("No Email in Database Please contact Admin");
                                        alert("This application is a Manual Application! Save the application only After Sending the Application Manually on the respective Portals!");
                                    }
                                    else {
                                        $('#uni_email_c').attr("value", data);
                                        alert("Clicking on SAVE Button will send the Application to the University with the attachment that you will upload here! Please upload Zip Files ONLY!");
                                        $('#filename_label').parent().css("display", "table-row");
                                        $('#uni_email_c_label').parent().css("display", "table-row");
                                        $('#email_subject_c_label').parent().css("display", "table-row");
                                        $('#email_body_c_label').parent().css("display", "table-row");

                                        // Gets the Course Checklist
                                        $.ajax({
                                            url: "/anmol_applications_ajax_call/script_get_checklist_courses_app_stages.php",
                                            type: "post", dataType: "JSON",
                                            data: $('#anmol_appl021dationss_ida').serialize(),
                                            success: function (data) {

                                                for (var i in data) {
                                                    var $x = new Array();
                                                    $x = data[i].split('#');

                                                    if (typeof $x[1] === 'undefined') {
                                                        $x[1] = 'N/a';
                                                    }
                                                    $('.chkbxpnl').after('<tr><td><input class="myCB" value="" type="checkbox"></td>' + '<td>' + $x[0] + '</td>' + '<td>' + $x[1] + '</td>' + '</tr>');
                                                }


                                            }

                                        })
                                    }

                                }

                            })


                            //what to hide
                            $('#pendency_stage_0_subject_c_label').parent().css("display", "none");
                            $('#pendency_stage_0_c_label').parent().css("display", "none");


                            // Append the Email Subject and Email Body


                        }


                        // If selected Pendency at stage 1
                        if ($("#application_stage_c").val() == "pendency_stage_1" && $('#app_sent_to_uni_c').val() == "1") {

                            alert("Application has a Pendency at stage 1!");

                            //show this
                            $('#pendency_stage_1_subject_c_label').parent().css("display", "table-row");
                            $('#pendency_stage_1_c_label').parent().css("display", "table-row");

                            //hide this
                            $('#filename_label').parent().css("display", "none");


                        } else {
                            $('#pendency_stage_1_subject_c_label').parent().css("display", "none");
                            $('#pendency_stage_1_c_label').parent().css("display", "none");
                        }


                        if ($("#application_stage_c").val() == "pendency_stage_1_update_to_uni") {

                            // alert("Upload the Pendency Document");

                            $('#filename_label').parent().css("display", "table-row");


                        }


                        // Period

                        if ($("#application_stage_c").val() == "uncon_offer") {

                            //  alert("Upload the Unconditional Offer Letter");

                            $('#filename_label').parent().css("display", "table-row");


                        }

                        // Period

                        if ($("#application_stage_c").val() == "con_offer") {

                            alert("Upload the Conditional Offer Letter");

                            $('#filename_label').parent().css("display", "table-row");


                        }


                        if ($("#application_stage_c").val() == "stage2") {

                            alert("Upload the Conditional Offer Letter");

                            $('#filename_label').parent().css("display", "table-row");
                            $('#email_subject_stage2_c_label').parent().css("display", "table-row");
                            $('#email_body_stage2_c_label').parent().css("display", "table-row");

                            $('#uni_email_c').parent().css("display", "table-row");


                        }

                        if ($("#application_stage_c").val() == "rej_on_stage_1") {


                            $('#filename_label').parent().css("display", "table-row");


                        }

                        if ($("#application_stage_c").val() == "rej_on_stage_1_by_student") {


                            $('#filename_label').parent().css("display", "none");


                        }
                        if ($("#application_stage_c").val() == "pendency_stage_2") {

                            alert("Application has a Pendency at stage 2!");

                            //show this
                            $('#pendency_stage_2_subject_c_label').parent().css("display", "table-row");
                            $('#pendency_stage_2_c_label').parent().css("display", "table-row");

                            $('#filename_label').parent().css("display", "none");


                        }
                        if ($("#application_stage_c").val() == "pendency_stage_2_update_to_uni") {


                            $('#filename_label').parent().css("display", "table-row");


                        }

                        if ($("#application_stage_c").val() == "coe") {


                            $('#filename_label').parent().css("display", "table-row");


                        }
                    });


                });


            })(jQuery)
        </script>
        <?php

    }


}

//
echo "<style>
.chkbxtbl tr td
{
	border: 1px black solid;
	padding: 2px 4px 2px 4px;

}

</style>";

