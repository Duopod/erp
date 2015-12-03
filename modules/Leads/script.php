<?php

// custom/modules/Leads/add_branch.php This hook adds the branch automatically to the Lead.

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class script_branch
{

    public function script($event, $arguments)
    {


        //print_r($_SESSION);
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


        ?>
        <script>
            (function ($) {
                $(document).ready(function () {

                    var assigned_usr_id = $('#assigned_user_id').val();

                    // watch for a change in course ID
                    $('#btn_assigned_user_name').click(function () {
                        $('#assigned_user_id').val("");
                        checkAccountIdChange();
                    });
                    $('#assigned_user_name').blur(function () {
                        checkAccountIdChange();
                    });

                    function checkAccountIdChange() {
                        var theInterval = setInterval(function () {
                            var oldId = $('#assigned_user_id').data('oldId');
                            var newId = $('#assigned_user_id').val();
                            if (oldId != newId && newId != '') {
                                getAccountData(newId, theInterval);
                                $('#assigned_user_id').data('oldId', newId);
                            }

                        }, 500);
                    }


                    function getAccountData(id, theInterval) {
                        //  alert(id);
                        // alert("changed");
                        if (id != assigned_usr_id) {
                            $('#re_assign_comment_c').css("display", "block");
                            $('#re_assign_comment_c_label').css("display", "block");
                            $('#btn_assigned_user_name').css("display", "none");
                            $('#btn_clr_assigned_user_name').css("display", "none");
                            // Empty the follow up date and hide it
                            $('#follow_up_date_c_date').val("");
                            $('#follow_up_date_c_date').css("display", "none");
                            $('#follow_up_date_c_trigger').css("display", "none");
                            $('#follow_up_date_c_label').css("display", "none");
                            $('#follow_up_date_c_time_section').css("display", "none");

                            clearInterval(theInterval);
                        } else {
                            $('#assigned_user_id').val(assigned_usr_id);

                        }
                    }

                    //


                    var $brancID = "<?php echo $branch_id;?>";
                    var $branchName = "<?php echo $branch_name;?>";
                    //fetch id and branch name of cuufent user
                    // setTimeout(function () {
                    $('#fp_event_locations_leads_1fp_event_locations_ida').val($brancID);
                    $('#fp_event_locations_leads_1_name').val($branchName);
                    $('#fp_event_locations_leads_1_name').attr("disabled", "true");
                    $('#btn_fp_event_locations_leads_1_name').remove();
                    $('#btn_clr_fp_event_locations_leads_1_name').remove();

                    //alert("hello");

                    //  $('#follow_up_date_c_time_section').css("display", "none");

                    $('#lead_conv_ac_op').css("display", "none");        // Hide the Copy Activities to panel while converting
                    $('#newContacts').attr("disabled", "true");
                    $('#assigned_user_name').attr("disabled", "true");

                    $('#newContacts').css("display", "none");
                    // Hide Time in Follow up date:
                    // $('#follow_up_date_c_hours').css("display", "none");
                    // $('#follow_up_date_c_minutes').css("display", "none");
                    // $('#follow_up_date_c_meridiem').css("display", "none");
//Hide Created by and Re assign Comment
                    $('#created_by_name').css("display", "none");
                    $('#btn_created_by_name').css("display", "none");
                    $('#btn_clr_created_by_name').css("display", "none");
                    $('#created_by_name_label').css("display", "none");
                    $('#re_assign_comment_c').css("display", "none");
                    $('#re_assign_comment_c_label').css("display", "none");

//hide the assigning cross button
                    $('#btn_clr_assigned_user_name').css("display", "none");
                    $("#report_to_name,#btn_report_to_name,#btn_clr_report_to_name").css("display", "none");
                    $("td:contains('Create Contact')").css("display", "none");
                    $("td:contains('Select Contact')").css("display", "none");

// Empty The input value of Follow Up date:
                    $('#follow_up_date_c_date').val("");
                    $('#re_assign_comment_c').val("");

                })
            })(jQuery)
        </script>
        <?php

    }


}

