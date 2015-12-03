<?php
$popupMeta = array(
    'moduleMain' => 'anmol_course_search',
    'varName' => 'anmol_course_search',
    'orderBy' => 'anmol_course_search.name',
    'whereClauses' => array(
        'name' => 'anmol_course_search.name',
        'course_intake_c' => 'anmol_course_search_cstm.course_intake_c',
        'course_level_c' => 'anmol_course_search_cstm.course_level_c',
        'course_duration_c' => 'anmol_course_search_cstm.course_duration_c',
        'currency_id' => 'anmol_course_search_cstm.currency_id',
        'anmol_university_list_anmol_course_search_1_name' => 'anmol_course_search.anmol_university_list_anmol_course_search_1_name',
        'location_c' => 'anmol_course_search_cstm.location_c',
    ),
    'searchInputs' => array(
        1 => 'name',
        4 => 'course_intake_c',
        5 => 'course_level_c',
        6 => 'course_duration_c',
        7 => 'currency_id',
        8 => 'anmol_university_list_anmol_course_search_1_name',
        9 => 'location_c',
    ),
    'searchdefs' => array(
        'name' =>
            array(
                'name' => 'name',
                'width' => '10%',
            ),
        'course_intake_c' =>
            array(
                'type' => 'multienum',
                'studio' => 'visible',
                'label' => 'LBL_COURSE_INTAKE',
                'width' => '10%',
                'name' => 'course_intake_c',
            ),
        'course_level_c' =>
            array(
                'type' => 'multienum',
                'studio' => 'visible',
                'label' => 'LBL_COURSE_LEVEL',
                'width' => '10%',
                'name' => 'course_level_c',
            ),
        'course_duration_c' =>
            array(
                'type' => 'multienum',
                'studio' => 'visible',
                'label' => 'LBL_COURSE_DURATION',
                'width' => '10%',
                'name' => 'course_duration_c',
            ),
        'currency_id' =>
            array(
                'type' => 'currency_id',
                'studio' => 'visible',
                'label' => 'LBL_CURRENCY',
                'width' => '10%',
                'name' => 'currency_id',
            ),
        'anmol_university_list_anmol_course_search_1_name' =>
            array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_ANMOL_UNIVERSITY_LIST_ANMOL_COURSE_SEARCH_1_FROM_ANMOL_UNIVERSITY_LIST_TITLE',
                'id' => 'ANMOL_UNIVF5D9TY_LIST_IDA',
                'width' => '10%',
                'name' => 'anmol_university_list_anmol_course_search_1_name',
            ),
        'location_c' =>
            array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_LOCATION',
                'width' => '10%',
                'name' => 'location_c',
            ),
    ),
    'listviewdefs' => array(
        'NAME' =>
            array(
                'width' => '32%',
                'label' => 'LBL_NAME',
                'default' => true,
                'link' => true,
                'name' => 'name',
            ),
        'COURSE_LEVEL_C' =>
            array(
                'type' => 'multienum',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_COURSE_LEVEL',
                'width' => '10%',
                'name' => 'course_level_c',
            ),
        'REPRESENTED_BY_US_C' =>
            array(
                'type' => 'enum',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_REPRESENTED_BY_US',
                'width' => '10%',
                'name' => 'represented_by_us_c',
            ),
        'CURRENCY_ID' =>
            array(
                'type' => 'currency_id',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_CURRENCY',
                'width' => '10%',
                'name' => 'currency_id',
            ),
        'ANMOL_UNIVERSITY_LIST_ANMOL_COURSE_SEARCH_1_NAME' =>
            array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_ANMOL_UNIVERSITY_LIST_ANMOL_COURSE_SEARCH_1_FROM_ANMOL_UNIVERSITY_LIST_TITLE',
                'id' => 'ANMOL_UNIVF5D9TY_LIST_IDA',
                'width' => '10%',
                'default' => true,
                'name' => 'anmol_university_list_anmol_course_search_1_name',
            ),
        'LOCATION_C' =>
            array(
                'type' => 'enum',
                'default' => true,
                'studio' => 'visible',
                'label' => 'LBL_LOCATION',
                'width' => '10%',
                'name' => 'location_c',
            ),
    ),
);
