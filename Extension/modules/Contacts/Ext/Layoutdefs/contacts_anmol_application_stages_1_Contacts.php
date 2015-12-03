<?php
// created: 2015-09-21 22:38:53
$layout_defs["Contacts"]["subpanel_setup"]['contacts_anmol_application_stages_1'] = array(
    'order' => 100,
    'module' => 'anmol_application_stages',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_CONTACTS_ANMOL_APPLICATION_STAGES_1_FROM_ANMOL_APPLICATION_STAGES_TITLE',
    'get_subpanel_data' => 'contacts_anmol_application_stages_1',
    'top_buttons' =>
        array(
            0 =>
                array(
                    'widget_class' => 'SubPanelTopCreateButton',
                ),
            1 =>
                array(
                    'widget_class' => 'SubPanelTopSelectButton',
                    'mode' => 'MultiSelect',
                ),
        ),
);
////