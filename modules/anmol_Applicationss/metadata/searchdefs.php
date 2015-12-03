<?php
$module_name = 'anmol_Applicationss';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'uni_name_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_UNI_NAME',
        'width' => '10%',
        'name' => 'uni_name_c',
      ),
      'contacts_anmol_applicationss_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CONTACTS_ANMOL_APPLICATIONSS_1_FROM_CONTACTS_TITLE',
        'id' => 'CONTACTS_ANMOL_APPLICATIONSS_1CONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'contacts_anmol_applicationss_1_name',
      ),
      'anmol_course_search_anmol_applicationss_2_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ANMOL_COURSE_SEARCH_ANMOL_APPLICATIONSS_2_FROM_ANMOL_COURSE_SEARCH_TITLE',
        'id' => 'ANMOL_COURSE_SEARCH_ANMOL_APPLICATIONSS_2ANMOL_COURSE_SEARCH_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'anmol_course_search_anmol_applicationss_2_name',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
