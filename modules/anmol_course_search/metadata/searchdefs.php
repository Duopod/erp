<?php
$module_name = 'anmol_course_search';
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
                        'course_level_c' =>
                            array(
                                'type' => 'multienum',
                                'default' => true,
                                'studio' => 'visible',
                                'label' => 'LBL_COURSE_LEVEL',
                                'width' => '10%',
                                'name' => 'course_level_c',
                            ),
                        'course_intake_c' =>
                            array(
                                'type' => 'multienum',
                                'default' => true,
                                'studio' => 'visible',
                                'label' => 'LBL_COURSE_INTAKE',
                                'width' => '10%',
                                'name' => 'course_intake_c',
                            ),
                        'currency_id' =>
                            array(
                                'type' => 'currency_id',
                                'default' => true,
                                'studio' => 'visible',
                                'label' => 'LBL_CURRENCY',
                                'width' => '10%',
                                'name' => 'currency_id',
                            ),
                        'represented_by_us_c' =>
                            array(
                                'type' => 'enum',
                                'default' => true,
                                'studio' => 'visible',
                                'label' => 'LBL_REPRESENTED_BY_US',
                                'width' => '10%',
                                'name' => 'represented_by_us_c',
                            ),
                        'min_ielts_requirement_c' =>
                            array(
                                'type' => 'enum',
                                'default' => true,
                                'studio' => 'visible',
                                'label' => 'LBL_MIN_IELTS_REQUIREMENT',
                                'width' => '10%',
                                'name' => 'min_ielts_requirement_c',
                            ),
                        'total_fee_c' =>
                            array(
                                'type' => 'currency',
                                'default' => true,
                                'label' => 'LBL_TOTAL_FEE',
                                'currency_format' => true,
                                'width' => '10%',
                                'name' => 'total_fee_c',
                            ),
                        'course_duration_c' =>
                            array(
                                'type' => 'multienum',
                                'default' => true,
                                'studio' => 'visible',
                                'label' => 'LBL_COURSE_DURATION',
                                'width' => '10%',
                                'name' => 'course_duration_c',
                            ),
                        'min_academin_requirement_c' =>
                            array(
                                'type' => 'multienum',
                                'default' => true,
                                'studio' => 'visible',
                                'label' => 'LBL_MIN_ACADEMIN_REQUIREMENT',
                                'width' => '10%',
                                'name' => 'min_academin_requirement_c',
                            ),
                        'ielts_required_c' =>
                            array(
                                'type' => 'enum',
                                'default' => true,
                                'studio' => 'visible',
                                'label' => 'LBL_IELTS_REQUIRED',
                                'width' => '10%',
                                'name' => 'ielts_required_c',
                            ),
                        'location_c' =>
                            array(
                                'type' => 'enum',
                                'default' => true,
                                'studio' => 'visible',
                                'label' => 'LBL_LOCATION',
                                'width' => '10%',
                                'name' => 'location_c',
                            ),
                        'anmol_university_list_anmol_course_search_1_name' =>
                            array(
                                'type' => 'relate',
                                'link' => true,
                                'label' => 'LBL_ANMOL_UNIVERSITY_LIST_ANMOL_COURSE_SEARCH_1_FROM_ANMOL_UNIVERSITY_LIST_TITLE',
                                'id' => 'ANMOL_UNIVF5D9TY_LIST_IDA',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'anmol_university_list_anmol_course_search_1_name',
                            ),
                        'name' =>
                            array(
                                'name' => 'name',
                                'default' => true,
                                'width' => '10%',
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
