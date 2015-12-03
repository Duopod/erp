<?php
// created: 2015-09-08 17:27:28
$layout_defs["Contacts"]["subpanel_setup"]['contacts_anmol_applicationss_1'] = array(
    'order' => 100,
    'module' => 'anmol_Applicationss',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_CONTACTS_ANMOL_APPLICATIONSS_1_FROM_ANMOL_APPLICATIONSS_TITLE',
    'get_subpanel_data' => 'contacts_anmol_applicationss_1',
    'top_buttons' =>
        array(
            0 =>
                array(
                    'widget_class' => 'SubPanelTopButtonQuickCreate',
                ),
            1 =>
                array(
                    'widget_class' => 'SubPanelTopSelectButton',
                    'mode' => 'MultiSelect',
                ),
        ),
);
