<?php
$viewdefs ['Contacts'] =
    array(
        'DetailView' =>
            array(
                'templateMeta' =>
                    array(
                        'form' =>
                            array(
                                'buttons' =>
                                    array(
                                        0 => 'EDIT',
                                        1 => 'DUPLICATE',
                                        2 => 'DELETE',
                                        3 => 'FIND_DUPLICATES',
                                        4 =>
                                            array(
                                                'customCode' => '<input type="submit" class="button" title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" onclick="this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Contacts\';" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}"/>',
                                                'sugar_html' =>
                                                    array(
                                                        'type' => 'submit',
                                                        'value' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                                                        'htmlOptions' =>
                                                            array(
                                                                'class' => 'button',
                                                                'id' => 'manage_subscriptions_button',
                                                                'title' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                                                                'onclick' => 'this.form.return_module.value=\'Contacts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Contacts\';',
                                                                'name' => 'Manage Subscriptions',
                                                            ),
                                                    ),
                                            ),
                                        'AOS_GENLET' =>
                                            array(
                                                'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_GENERATE_LETTER}">',
                                            ),
                                        'AOP_CREATE' =>
                                            array(
                                                'customCode' => '{if !$fields.joomla_account_id.value && $AOP_PORTAL_ENABLED}<input type="submit" class="button" onClick="this.form.action.value=\'createPortalUser\';" value="{$MOD.LBL_CREATE_PORTAL_USER}"> {/if}',
                                                'sugar_html' =>
                                                    array(
                                                        'type' => 'submit',
                                                        'value' => '{$MOD.LBL_CREATE_PORTAL_USER}',
                                                        'htmlOptions' =>
                                                            array(
                                                                'title' => '{$MOD.LBL_CREATE_PORTAL_USER}',
                                                                'class' => 'button',
                                                                'onclick' => 'this.form.action.value=\'createPortalUser\';',
                                                                'name' => 'buttonCreatePortalUser',
                                                                'id' => 'createPortalUser_button',
                                                            ),
                                                        'template' => '{if !$fields.joomla_account_id.value && $AOP_PORTAL_ENABLED}[CONTENT]{/if}',
                                                    ),
                                            ),
                                        'AOP_DISABLE' =>
                                            array(
                                                'customCode' => '{if $fields.joomla_account_id.value && !$fields.portal_account_disabled.value && $AOP_PORTAL_ENABLED}<input type="submit" class="button" onClick="this.form.action.value=\'disablePortalUser\';" value="{$MOD.LBL_DISABLE_PORTAL_USER}"> {/if}',
                                                'sugar_html' =>
                                                    array(
                                                        'type' => 'submit',
                                                        'value' => '{$MOD.LBL_DISABLE_PORTAL_USER}',
                                                        'htmlOptions' =>
                                                            array(
                                                                'title' => '{$MOD.LBL_DISABLE_PORTAL_USER}',
                                                                'class' => 'button',
                                                                'onclick' => 'this.form.action.value=\'disablePortalUser\';',
                                                                'name' => 'buttonDisablePortalUser',
                                                                'id' => 'disablePortalUser_button',
                                                            ),
                                                        'template' => '{if $fields.joomla_account_id.value && !$fields.portal_account_disabled.value && $AOP_PORTAL_ENABLED}[CONTENT]{/if}',
                                                    ),
                                            ),
                                        'AOP_ENABLE' =>
                                            array(
                                                'customCode' => '{if $fields.joomla_account_id.value && $fields.portal_account_disabled.value && $AOP_PORTAL_ENABLED}<input type="submit" class="button" onClick="this.form.action.value=\'enablePortalUser\';" value="{$MOD.LBL_ENABLE_PORTAL_USER}"> {/if}',
                                                'sugar_html' =>
                                                    array(
                                                        'type' => 'submit',
                                                        'value' => '{$MOD.LBL_ENABLE_PORTAL_USER}',
                                                        'htmlOptions' =>
                                                            array(
                                                                'title' => '{$MOD.LBL_ENABLE_PORTAL_USER}',
                                                                'class' => 'button',
                                                                'onclick' => 'this.form.action.value=\'enablePortalUser\';',
                                                                'name' => 'buttonENablePortalUser',
                                                                'id' => 'enablePortalUser_button',
                                                            ),
                                                        'template' => '{if $fields.joomla_account_id.value && $fields.portal_account_disabled.value && $AOP_PORTAL_ENABLED}[CONTENT]{/if}',
                                                    ),
                                            ),
                                    ),
                            ),
                        'maxColumns' => '2',
                        'widths' =>
                            array(
                                0 =>
                                    array(
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                                1 =>
                                    array(
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                            ),
                        'includes' =>
                            array(
                                0 =>
                                    array(
                                        'file' => 'modules/Leads/Lead.js',
                                    ),
                            ),
                        'useTabs' => true,
                        'tabDefs' =>
                            array(
                                'LBL_CONTACT_INFORMATION' =>
                                    array(
                                        'newTab' => true,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_EDITVIEW_PANEL9' =>
                                    array(
                                        'newTab' => true,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_EDITVIEW_PANEL10' =>
                                    array(
                                        'newTab' => true,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_EDITVIEW_PANEL6' =>
                                    array(
                                        'newTab' => true,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_EDITVIEW_PANEL2' =>
                                    array(
                                        'newTab' => true,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_EDITVIEW_PANEL5' =>
                                    array(
                                        'newTab' => true,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_EDITVIEW_PANEL4' =>
                                    array(
                                        'newTab' => true,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_EDITVIEW_PANEL1' =>
                                    array(
                                        'newTab' => true,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_EDITVIEW_PANEL7' =>
                                    array(
                                        'newTab' => true,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_EDITVIEW_PANEL8' =>
                                    array(
                                        'newTab' => true,
                                        'panelDefault' => 'expanded',
                                    ),
                            ),
                        'syncDetailEditViews' => true,
                    ),
                'panels' =>
                    array(
                        'lbl_contact_information' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'first_name',
                                                'comment' => 'First name of the contact',
                                                'label' => 'LBL_FIRST_NAME',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'last_name',
                                                'comment' => 'Last name of the contact',
                                                'label' => 'LBL_LAST_NAME',
                                            ),
                                    ),
                                1 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'phone_mobile',
                                                'label' => 'LBL_MOBILE_PHONE',
                                            ),
                                    ),
                                2 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'email1',
                                                'studio' => 'false',
                                                'label' => 'LBL_EMAIL_ADDRESS',
                                            ),
                                    ),
                                3 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'birthdate',
                                                'comment' => 'The birthdate of the contact',
                                                'label' => 'LBL_BIRTHDATE',
                                            ),
                                    ),
                            ),
                        'lbl_editview_panel9' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'passport_number_c',
                                                'label' => 'LBL_PASSPORT_NUMBER',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'passport_expiry_date_c',
                                                'label' => 'LBL_PASSPORT_EXPIRY_DATE',
                                            ),
                                    ),
                            ),
                        'lbl_editview_panel10' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'photo',
                                                'label' => 'LBL_PHOTO',
                                            ),
                                    ),
                                1 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'contact_address_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_CONTACT_ADDRESS',
                                            ),
                                        1 => '',
                                    ),
                                2 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'state_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_STATE',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'city_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_CITY',
                                            ),
                                    ),
                            ),
                        'lbl_editview_panel6' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'marketing_activity_type_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_MARKETING_ACTIVITY_TYPE',
                                            ),
                                        1 => '',
                                    ),
                                1 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'campaign_name',
                                                'label' => 'LBL_CAMPAIGN',
                                            ),
                                        1 => '',
                                    ),
                                2 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'lead_score_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_LEAD_SCORE',
                                            ),
                                        1 => '',
                                    ),
                            ),
                        'lbl_editview_panel2' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'last_qualification_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_LAST_QUALIFICATION',
                                            ),
                                        1 => '',
                                    ),
                                1 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'last_qualification_name_c',
                                                'label' => 'LBL_LAST_QUALIFICATION_NAME',
                                            ),
                                        1 => '',
                                    ),
                                2 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'last_year_of_qualification_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_LAST_YEAR_OF_QUALIFICATION',
                                            ),
                                        1 => '',
                                    ),
                            ),
                        'lbl_editview_panel5' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'experience_in_years_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_EXPERIENCE_IN_YEARS',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'experience_in_months_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_EXPERIENCE_IN_MONTHS',
                                            ),
                                    ),
                            ),
                        'lbl_editview_panel4' =>
                            array(
                                0 =>
                                    array(
                                        0 => '',
                                        1 => '',
                                    ),
                            ),
                        'lbl_editview_panel1' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'course_level_preference_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_COURSE_LEVEL_PREFERENCE',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'stream_interest_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_STREAM_INTEREST',
                                            ),
                                    ),
                                1 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'country_interested_in_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_COUNTRY_INTERESTED_IN',
                                            ),
                                        1 => '',
                                    ),
                                2 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'intake_year_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_INTAKE_YEAR',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'intake_month_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_INTAKE_MONTH',
                                            ),
                                    ),
                            ),
                        'lbl_editview_panel7' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'assigned_user_name',
                                                'label' => 'LBL_ASSIGNED_TO_NAME',
                                            ),
                                        1 => '',
                                    ),
                            ),
                        'lbl_editview_panel8' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'remark_history_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_REMARK_HISTORY',
                                                'customCode' => '{$fields.remark_history_c.value|escape:\'htmlentitydecode\' |escape:\'html\'|strip_tags|url2html|nl2br}',
                                            ),
                                        1 => '',
                                    ),
                            ),
                    ),
            ),
    );
?>
<script>
    (function ($) {
        $(document).ready(function () {

            $('#contacts_anmol_applications_1_create_button').click(function () {


                /************ This adds a Dialogue box*/

                $(function () {
                    $("#dialog222").dialog();
                });

                /*************************/

                var origAppend = $.fn.append;

                $.fn.append = function () {
                    return origAppend.apply(this, arguments).trigger("append");
                };


                $("div").bind("append", function () {

                    $("#btn_assigned_user_name,#btn_clr_assigned_user_name").css("display", "none");
                    $('#assigned_user_name').attr("disabled", "true");

                    // alert('Hello, world!');

                });


            });

            //	$("#campaign_name,#Contacts0emailAddress0").attr("disabled","true");
            //				$("#btn_campaign_name,#btn_clr_campaign_name,#birthdate_trigger,#btn_assigned_user_name,#btn_clr_assigned_user_name").css("display","none");

            /*$('#lead_conv_ac_op').css("display","none");        // Hide the Copy Activities to panel while converting

             $('#newContacts').css("display","none");
             $("#btn_campaign_name,#btn_report_to_name,#btn_clr_report_to_name").css("display","none");
             $( "td:contains('Create Contact')" ).css("display","none");
             $( "td:contains('Select Contact')" ).css("display","none");*/


        })
    })(jQuery)
</script>


<div style="display:none;" id="dialog222" title="SIEC Tip">
    <p>A new Application is being created. Select a course to Add the Application. After Saving the Application, click
        on the Application to upload Documents.</p>
</div>