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


        ?>
        <script>
            (function ($) {
                $(document).ready(function () {

// Disable the name box
                    $('#name').attr("disabled", "true");
                    // Disable and hide app select box
                    $('#anmol_applicationss_opportunities_1_name').attr("disabled", "true");
                    $('#anmol_applicationss_opportunities_1_name').css("display", "none");
                    $('#btn_anmol_applicationss_opportunities_1_name').css("display", "none");
                    $('#btn_clr_anmol_applicationss_opportunities_1_name').css("display", "none");
                    $('#anmol_applicationss_opportunities_1_name_label').css("display", "none");


                })
            })(jQuery)
        </script>
        <?php

    }


}

