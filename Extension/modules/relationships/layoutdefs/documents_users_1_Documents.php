<?php
// created: 2015-08-29 17:04:07
$layout_defs["Documents"]["subpanel_setup"]['documents_users_1'] = array(
    'order' => 100,
    'module' => 'Users',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_DOCUMENTS_USERS_1_FROM_USERS_TITLE',
    'get_subpanel_data' => 'documents_users_1',
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
