<?php
// created: 2015-09-08 17:22:06
$layout_defs["anmol_Applicationss"]["subpanel_setup"]['anmol_applicationss_documents_1'] = array(
    'order' => 100,
    'module' => 'Documents',
    'subpanel_name' => 'default',
    'sort_order' => 'asc',
    'sort_by' => 'id',
    'title_key' => 'LBL_ANMOL_APPLICATIONSS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
    'get_subpanel_data' => 'anmol_applicationss_documents_1',
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
