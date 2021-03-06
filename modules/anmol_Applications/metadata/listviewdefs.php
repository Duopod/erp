<?php
$module_name = 'anmol_Applications';
$listViewDefs [$module_name] =
    array(
        'NAME' =>
            array(
                'width' => '32%',
                'label' => 'LBL_NAME',
                'default' => true,
                'link' => true,
            ),
        'UNI_NAME_C' =>
            array(
                'type' => 'varchar',
                'default' => true,
                'label' => 'LBL_UNI_NAME',
                'width' => '10%',
            ),
        'ANMOL_COURSE_SEARCH_ANMOL_APPLICATIONS_1_NAME' =>
            array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_ANMOL_COURSE_SEARCH_ANMOL_APPLICATIONS_1_FROM_ANMOL_COURSE_SEARCH_TITLE',
                'id' => 'ANMOL_COURSE_SEARCH_ANMOL_APPLICATIONS_1ANMOL_COURSE_SEARCH_IDA',
                'width' => '10%',
                'default' => true,
            ),
        'DATE_ENTERED' =>
            array(
                'type' => 'datetime',
                'label' => 'LBL_DATE_ENTERED',
                'width' => '10%',
                'default' => true,
            ),
        'CREATED_BY_NAME' =>
            array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_CREATED',
                'id' => 'CREATED_BY',
                'width' => '10%',
                'default' => true,
            ),
        'CONTACTS_ANMOL_APPLICATIONS_1_NAME' =>
            array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_CONTACTS_ANMOL_APPLICATIONS_1_FROM_CONTACTS_TITLE',
                'id' => 'CONTACTS_ANMOL_APPLICATIONS_1CONTACTS_IDA',
                'width' => '10%',
                'default' => true,
            ),
        'MODIFIED_BY_NAME' =>
            array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_MODIFIED_NAME',
                'id' => 'MODIFIED_USER_ID',
                'width' => '10%',
                'default' => false,
            ),
        'ANMOL_UNIVERSITY_LIST_ANMOL_APPLICATIONS_1_NAME' =>
            array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_ANMOL_UNIVERSITY_LIST_ANMOL_APPLICATIONS_1_FROM_ANMOL_UNIVERSITY_LIST_TITLE',
                'id' => 'ANMOL_UNIV049ATY_LIST_IDA',
                'width' => '10%',
                'default' => false,
            ),
        'ASSIGNED_USER_NAME' =>
            array(
                'width' => '9%',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'module' => 'Employees',
                'id' => 'ASSIGNED_USER_ID',
                'default' => false,
            ),
        'DESCRIPTION' =>
            array(
                'type' => 'text',
                'label' => 'LBL_DESCRIPTION',
                'sortable' => false,
                'width' => '10%',
                'default' => false,
            ),
        'DATE_MODIFIED' =>
            array(
                'type' => 'datetime',
                'label' => 'LBL_DATE_MODIFIED',
                'width' => '10%',
                'default' => false,
            ),
    );
?>
