<?php
$listViewDefs ['Contacts'] = 
array (
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'contextMenu' => 
    array (
      'objectType' => 'sugarPerson',
      'metaData' => 
      array (
        'contact_id' => '{$ID}',
        'module' => 'Contacts',
        'return_action' => 'ListView',
        'contact_name' => '{$FULL_NAME}',
        'parent_id' => '{$ACCOUNT_ID}',
        'parent_name' => '{$ACCOUNT_NAME}',
        'return_module' => 'Contacts',
        'parent_type' => 'Account',
        'notes_parent_type' => 'Account',
      ),
    ),
    'orderBy' => 'name',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
      3 => 'account_name',
      4 => 'account_id',
    ),
  ),
  'PASSPORT_NUMBER_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PASSPORT_NUMBER',
    'width' => '10%',
  ),
  'PASSPORT_EXPIRY_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_PASSPORT_EXPIRY_DATE',
    'width' => '10%',
  ),
  'CITY_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CITY',
    'width' => '10%',
  ),
  'PHONE_MOBILE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MOBILE_PHONE',
    'default' => true,
  ),
);
?>
