<?php
$module_name = 'anmol_University_list';
$searchdefs [$module_name] =
    array(
        'layout' =>
            array(
                'basic_search' =>
                    array(
                        0 => 'name',
                        1 =>
                            array(
                                'name' => 'current_user_only',
                                'label' => 'LBL_CURRENT_USER_FILTER',
                                'type' => 'bool',
                            ),
                    ),
                'advanced_search' =>
                    array(
                        'name' =>
                            array(
                                'name' => 'name',
                                'default' => true,
                                'width' => '10%',
                            ),
                        'campus_c' =>
                            array(
                                'type' => 'varchar',
                                'default' => true,
                                'label' => 'LBL_CAMPUS',
                                'width' => '10%',
                                'name' => 'campus_c',
                            ),
                        'country_c' =>
                            array(
                                'type' => 'enum',
                                'default' => true,
                                'studio' => 'visible',
                                'label' => 'LBL_COUNTRY',
                                'width' => '10%',
                                'name' => 'country_c',
                            ),
                        'siec_represents_c' =>
                            array(
                                'type' => 'enum',
                                'default' => true,
                                'studio' => 'visible',
                                'label' => 'LBL_SIEC_REPRESENTS',
                                'width' => '10%',
                                'name' => 'siec_represents_c',
                            ),
                    ),
            ),
        'templateMeta' =>
            array(
                'maxColumns' => '3',
                'maxColumnsBasic' => '4',
                'widths' =>
                    array(
                        'label' => '10',
                        'field' => '30',
                    ),
            ),
    );
?>
