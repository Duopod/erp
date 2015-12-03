<?php
// created: 2015-09-04 11:17:10
$layout_defs["FP_Event_Locations"]["subpanel_setup"]['fp_event_locations_users_1'] = array(
    'order' => 100,
    'module' => 'Users',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_FP_EVENT_LOCATIONS_USERS_1_FROM_USERS_TITLE',
    'get_subpanel_data' => 'fp_event_locations_users_1',
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
