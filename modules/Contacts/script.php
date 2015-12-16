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


                    $("#campaign_name,#Contacts0emailAddress0").attr("disabled", "true");
                    $("#btn_campaign_name,#btn_clr_campaign_name,#birthdate_trigger,#btn_assigned_user_name,#btn_clr_assigned_user_name").css("display", "none");

                    /*$('#lead_conv_ac_op').css("display","none");        // Hide the Copy Activities to panel while converting

                     $('#newContacts').css("display","none");
                     $("#btn_campaign_name,#btn_report_to_name,#btn_clr_report_to_name").css("display","none");
                     $( "td:contains('Create Contact')" ).css("display","none");
                     $( "td:contains('Select Contact')" ).css("display","none");*/


                });


            })(jQuery)
        </script>
        <?php

    }


}



