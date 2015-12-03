<?php
// created: 2015-09-05 13:49:15
$layout_defs["anmol_Marketing_activities"]["subpanel_setup"]['anmol_marketing_activities_campaigns'] = array(
    'order' => 100,
    'module' => 'Campaigns',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_ANMOL_MARKETING_ACTIVITIES_CAMPAIGNS_FROM_CAMPAIGNS_TITLE',
    'get_subpanel_data' => 'anmol_marketing_activities_campaigns',
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
