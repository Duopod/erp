<?php
// created: 2015-08-30 13:15:31
$layout_defs["anmol_Applications"]["subpanel_setup"]['anmol_applications_opportunities_1'] = array(
    'order' => 100,
    'module' => 'Opportunities',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_ANMOL_APPLICATIONS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
    'get_subpanel_data' => 'anmol_applications_opportunities_1',
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
