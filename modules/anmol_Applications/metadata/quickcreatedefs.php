<?php
$module_name = 'anmol_Applications';
$viewdefs [$module_name] =
    array(
        'QuickCreate' =>
            array(
                'templateMeta' =>
                    array(
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
                        'useTabs' => false,
                        'tabDefs' =>
                            array(
                                'LBL_QUICKCREATE_PANEL2' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_QUICKCREATE_PANEL1' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                            ),
                    ),
                'panels' =>
                    array(
                        'lbl_quickcreate_panel2' =>
                            array(
                                0 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'anmol_course_search_anmol_applications_1_name',
                                                'label' => 'LBL_ANMOL_COURSE_SEARCH_ANMOL_APPLICATIONS_1_FROM_ANMOL_COURSE_SEARCH_TITLE',
                                            ),
                                    ),
                            ),
                        'lbl_quickcreate_panel1' =>
                            array(
                                0 =>
                                    array(
                                        0 => 'assigned_user_name',
                                        1 => '',
                                    ),
                            ),
                    ),
            ),
    );
?>
