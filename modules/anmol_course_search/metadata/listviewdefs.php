<?php
$module_name = 'anmol_course_search';
$listViewDefs [$module_name] =
    array(
        'NAME' =>
            array(
                'width' => '32%',
                'label' => 'LBL_NAME',
                'default' => true,
                'link' => true,
            ),
        'COURSE_LEVEL_C' =>
            array(
                'type' => 'multienum',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_COURSE_LEVEL',
                'width' => '10%',
            ),
        'REPRESENTED_BY_US_C' =>
            array(
                'type' => 'enum',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_REPRESENTED_BY_US',
                'width' => '10%',
            ),
        'CURRENCY_ID' =>
            array(
                'type' => 'currency_id',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_CURRENCY',
                'width' => '10%',
            ),
        'TOTAL_FEE_C' =>
            array(
                'type' => 'currency',
                'default' => true,
                'label' => 'LBL_TOTAL_FEE',
                'currency_format' => true,
                'width' => '10%',
            ),
        'COURSE_DURATION_C' =>
            array(
                'type' => 'multienum',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_COURSE_DURATION',
                'width' => '10%',
            ),
        'MIN_ACADEMIN_REQUIREMENT_C' =>
            array(
                'type' => 'multienum',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_MIN_ACADEMIN_REQUIREMENT',
                'width' => '10%',
            ),
        'ANMOL_UNIVERSITY_LIST_ANMOL_COURSE_SEARCH_1_NAME' =>
            array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_ANMOL_UNIVERSITY_LIST_ANMOL_COURSE_SEARCH_1_FROM_ANMOL_UNIVERSITY_LIST_TITLE',
                'id' => 'ANMOL_UNIVF5D9TY_LIST_IDA',
                'width' => '10%',
                'default' => true,
            ),
        'COURSE_INTAKE_C' =>
            array(
                'type' => 'multienum',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_COURSE_INTAKE',
                'width' => '10%',
            ),
        'LOCATION_C' =>
            array(
                'type' => 'enum',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_LOCATION',
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
