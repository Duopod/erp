<?php
$module_name = 'FP_Event_Locations';
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
        'LBL_EDITVIEW_PANEL2' => 
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
          0 => 'name',
          1 => 'date_entered',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'office_type_c',
            'studio' => 'visible',
            'label' => 'LBL_OFFICE_TYPE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'capacity',
            'label' => 'LBL_CAPACITY',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'branch_state_c',
            'studio' => 'visible',
            'label' => 'LBL_BRANCH_STATE',
          ),
          1 => 
          array (
            'name' => 'branch_city_c',
            'studio' => 'visible',
            'label' => 'LBL_BRANCH_CITY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'branch_address_c',
            'studio' => 'visible',
            'label' => 'LBL_BRANCH_ADDRESS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'branch_email_c',
            'label' => 'LBL_BRANCH_EMAIL',
          ),
          1 => 
          array (
            'name' => 'branch_phone_c',
            'label' => 'LBL_BRANCH_PHONE',
          ),
        ),
      ),
    ),
  ),
);
?>
