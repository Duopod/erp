<?php
$module_name = 'anmol_Applicationss';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'anmol_course_search_anmol_applicationss_2_name',
          ),
        ),
        1 => 
        array (
          0 => 'assigned_user_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'contacts_anmol_applicationss_1_name',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'filename',
            'label' => 'LBL_FILENAME',
          ),
            1 =>
                array(
                    'name' => 'fp_event_locations_anmol_applicationss_1_name',
                ),
        ),
      ),
    ),
  ),
);
?>
