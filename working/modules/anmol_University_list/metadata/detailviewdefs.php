<?php
$module_name = 'anmol_University_list';
$viewdefs [$module_name] =
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
                        'useTabs' => false,
                        'tabDefs' =>
                            array(
                                'DEFAULT' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                            ),
                    ),
                'panels' =>
                    array(
                        'default' =>
                            array(
                                0 =>
                                    array(
                                        0 => 'name',
                                    ),
                                1 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'campus_c',
                                                'label' => 'LBL_CAMPUS',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'country_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_COUNTRY',
                                            ),
                                    ),
                                2 =>
                                    array(
                                        0 => 'description',
                                        1 =>
                                            array(
                                                'name' => 'siec_represents_c',
                                                'studio' => 'visible',
                                                'label' => 'LBL_SIEC_REPRESENTS',
                                            ),
                                    ),
                            ),
                    ),
            ),
    );
?>
