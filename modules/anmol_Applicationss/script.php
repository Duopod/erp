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

//Disable Fields
                    $('#assigned_user_name').attr("disabled", "true");
                    $('#anmol_course_search_anmol_applicationss_2_name').attr("disabled", "true");
                    $('#contacts_anmol_applicationss_1_name').attr("disabled", "true");

                    //Hide Fields
                    $('#btn_assigned_user_name').css("display", "none");
                    $('#btn_clr_assigned_user_name').css("display", "none");
                    $('#btn_contacts_anmol_applicationss_1_name').css("display", "none");
                    $('#btn_clr_contacts_anmol_applicationss_1_name').css("display", "none");
                    $('#conditional_offer_c_label').parent().css("display", "none");
                    $('#testf_c_label').parent().css("display", "none");

                    ///////////////////
                    var test = $('#contacts_anmol_applicationss_1contacts_ida').val();
                    $('#testf_c').attr("value", test);
                    ////////////////


                    // watch for a change in course ID
                    $('#btn_anmol_course_search_anmol_applicationss_2_name').click(function () {
                        checkAccountIdChange();
                    });
                    $('#anmol_course_search_anmol_applicationss_2_name').blur(function () {
                        checkAccountIdChange();
                    });


                    function checkAccountIdChange() {
                        var theInterval = setInterval(function () {
                            var oldId = $('#anmol_course_search_anmol_applicationss_2anmol_course_search_ida').data('oldId');
                            var newId = $('#anmol_course_search_anmol_applicationss_2anmol_course_search_ida').val();
                            if (oldId != newId && newId != '') {
                                getAccountData(newId, theInterval);
                                $('#account_id').data('oldId', newId);
                            }

                        }, 500);
                    }

                    function getAccountData(id, theInterval) {

                        $('#conditional_offer_c_label').parent().css("display", "table-row");
                        //Hides the Select Course Button and Clear Button on course Select
                        $('#btn_anmol_course_search_anmol_applicationss_2_name').css("display", "none");
                        $('#btn_clr_anmol_course_search_anmol_applicationss_2_name').css("display", "none");
// Append a custom DIV


                        $('#detailpanel_1').append('</br><h1>Document Checklist: Please check and tally all the Documents below before proceeding:</h1><table class="chkbxtbl" style="text-align: center;"><tr class="chkbxpnl"><th></th><th>Document Name</th><th>Requirement</th></tr></table>');
                        // This code is triggered when a course is selected


                        $.ajax({
                            url: "/anmol_applications_ajax_call/script_get_checklist_courses.php",
                            type: "post", dataType: "JSON",
                            data: $('#anmol_course_search_anmol_applicationss_2anmol_course_search_ida').serialize(),
                            success: function (data) {

                                for (var i in data) {
                                    var $x = new Array();
                                    $x = data[i].split('#');

                                    if (typeof $x[1] === 'undefined') {
                                        $x[1] = 'N/a';
                                    }
                                    $('.chkbxpnl').after('<tr><td><input class="myCB" value="" type="checkbox"></td>' + '<td>' + $x[0] + '</td>' + '<td>' + $x[1] + '</td>' + '</tr>');
                                }

                                $.each(obj, function (index, val) {     //function for parsing individual objects from ajax file

                                    $('#universities').append('<a href="" id="' + obj[index].uni_id + '">')
                                    $('#' + obj[index].uni_id).append(obj[index].uni_name + '</br>')

                                })
                            }

                        })

                        clearInterval(theInterval);

                    }


                });


            })(jQuery)
        </script>
        <?php

    }


}

//test
echo "<style>
.chkbxtbl tr td
{
	border: 1px black solid;
	padding: 2px 4px 2px 4px;

}

</style>";

