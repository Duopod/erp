<?php
$module_name = 'anmol_Applicationss';
$listViewDefs [$module_name] = 
array (
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ANMOL_COURSE_SEARCH_ANMOL_APPLICATIONSS_2_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ANMOL_COURSE_SEARCH_ANMOL_APPLICATIONSS_2_FROM_ANMOL_COURSE_SEARCH_TITLE',
    'id' => 'ANMOL_COURSE_SEARCH_ANMOL_APPLICATIONSS_2ANMOL_COURSE_SEARCH_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'UNI_NAME_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_UNI_NAME',
    'width' => '10%',
  ),
  'CONTACTS_ANMOL_APPLICATIONSS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_ANMOL_APPLICATIONSS_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_ANMOL_APPLICATIONSS_1CONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
    'FP_EVENT_LOCATIONS_ANMOL_APPLICATIONSS_1_NAME' =>
        array(
            'type' => 'relate',
            'link' => true,
            'label' => 'LBL_FP_EVENT_LOCATIONS_ANMOL_APPLICATIONSS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
            'id' => 'FP_EVENT_LOCATIONS_ANMOL_APPLICATIONSS_1FP_EVENT_LOCATIONS_IDA',
            'width' => '10%',
            'default' => true,
        ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
?>
