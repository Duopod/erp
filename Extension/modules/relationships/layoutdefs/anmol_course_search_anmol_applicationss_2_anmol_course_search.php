<?php
// created: 2015-09-08 17:45:17
$layout_defs["anmol_course_search"]["subpanel_setup"]['anmol_course_search_anmol_applicationss_2'] = array(
    'order' => 100,
    'module' => 'anmol_Applicationss',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_ANMOL_COURSE_SEARCH_ANMOL_APPLICATIONSS_2_FROM_ANMOL_APPLICATIONSS_TITLE',
    'get_subpanel_data' => 'anmol_course_search_anmol_applicationss_2',
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
