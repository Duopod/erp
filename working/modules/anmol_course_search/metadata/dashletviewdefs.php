<?php
$dashletData['anmol_course_searchDashlet']['searchFields'] = array(
    'date_entered' =>
        array(
            'default' => '',
        ),
    'date_modified' =>
        array(
            'default' => '',
        ),
    'assigned_user_id' =>
        array(
            'type' => 'assigned_user_name',
            'default' => 'Administrator',
        ),
);
$dashletData['anmol_course_searchDashlet']['columns'] = array(
    'name' =>
        array(
            'width' => '40%',
            'label' => 'LBL_LIST_NAME',
            'link' => true,
            'default' => true,
            'name' => 'name',
        ),
    'date_entered' =>
        array(
            'width' => '15%',
            'label' => 'LBL_DATE_ENTERED',
            'default' => true,
            'name' => 'date_entered',
        ),
    'date_modified' =>
        array(
            'width' => '15%',
            'label' => 'LBL_DATE_MODIFIED',
            'name' => 'date_modified',
            'default' => false,
        ),
    'anmol_university_list_anmol_course_search_1_name' =>
        array(
            'type' => 'relate',
            'link' => true,
            'label' => 'LBL_ANMOL_UNIVERSITY_LIST_ANMOL_COURSE_SEARCH_1_FROM_ANMOL_UNIVERSITY_LIST_TITLE',
            'id' => 'ANMOL_UNIVF5D9TY_LIST_IDA',
            'width' => '10%',
            'default' => false,
        ),
    'created_by' =>
        array(
            'width' => '8%',
            'label' => 'LBL_CREATED',
            'name' => 'created_by',
            'default' => false,
        ),
    'assigned_user_name' =>
        array(
            'width' => '8%',
            'label' => 'LBL_LIST_ASSIGNED_USER',
            'name' => 'assigned_user_name',
            'default' => false,
        ),
);
