<?php
$module_name = 'anmol_University_list';
$listViewDefs [$module_name] =
    array(
        'NAME' =>
            array(
                'width' => '32%',
                'label' => 'LBL_NAME',
                'default' => true,
                'link' => true,
            ),
        'SIEC_REPRESENTS_C' =>
            array(
                'type' => 'enum',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_SIEC_REPRESENTS',
                'width' => '10%',
            ),
        'COUNTRY_C' =>
            array(
                'type' => 'enum',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_COUNTRY',
                'width' => '10%',
            ),
        'CAMPUS_C' =>
            array(
                'type' => 'varchar',
                'default' => true,
                'label' => 'LBL_CAMPUS',
                'width' => '10%',
            ),
        'ASSIGNED_USER_NAME' =>
            array(
                'width' => '9%',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'module' => 'Employees',
                'id' => 'ASSIGNED_USER_ID',
                'default' => false,
            ),
    );
?>
